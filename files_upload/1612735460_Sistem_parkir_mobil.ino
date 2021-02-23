/*Trig : Trigger (INPUT) - Pin11
        Echo: Echo (OUTPUT) - Pin 12
        GND: GND
*/
#define sda 3
#define scl 2
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 16, 2);
int trigPin = 8;    // Trigger
int echoPin = 9;    // Echo
long duration, cm, inches;
const int pinBuzzer = 5;
boolean parkir = false;

void setup() {
  //Serial Port begin
  Serial.begin (9600);
  //Define inputs and outputs
  lcd.begin();   // initialize the lcd for 16 chars 2 lines, turn on backlight
   
  lcd.backlight();
  delay(250);
  lcd.noBacklight();
  delay(250);
  lcd.backlight();
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(pinBuzzer, OUTPUT);

  /*lcd.setCursor(0,0);
    lcd.print("test");
    delay(1000);
    lcd.setCursor(0,1);
    lcd.print("test 2");*/


  delay(8000);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  /*if(digitalRead(scl)==0)
  {
    byteRead();
  }*/
}

void loop() {
  // The sensor is triggered by a HIGH pulse of 10 or more microseconds.
  // Give a short LOW pulse beforehand to ensure a clean HIGH pulse:
  digitalWrite(trigPin, LOW);
  delayMicroseconds(5);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);

  // Read the signal from the sensor: a HIGH pulse whose
  // duration is the time (in microseconds) from the sending
  // of the ping to the reception of its echo off of an object.
  pinMode(echoPin, INPUT);
  duration = pulseIn(echoPin, HIGH);

  // Convert the time into a distance
  cm = (duration / 2) / 29.1;   // Divide by 29.1 or multiply by 0.0343
  inches = (duration / 2) / 74; // Divide by 74 or multiply by 0.0135

  Serial.print(inches);
  Serial.print("in, ");
  Serial.print(cm);
  Serial.print("cm");
  Serial.println();
  if (cm > 3) {
    digitalWrite(12, HIGH);   // turn the LED on (HIGH is the voltage level)
    digitalWrite(13, LOW);   // turn the LED on (HIGH is the voltage level)
    lcd.setCursor(0, 0);
    lcd.print("SELAMAT DATANG");
    digitalWrite(pinBuzzer, LOW);    //buzzer bunyi dengan delay
    parkir = false;
    delay(0);
  } else if (cm < 3 || cm < 0) {
    digitalWrite(13, HIGH);   // turn the LED on (HIGH is the voltage level)
    digitalWrite(12, LOW);
    lcd.setCursor(0, 0);
    lcd.print(" PARKIR SUKSES ");
    if (parkir == false) {
      digitalWrite(pinBuzzer, HIGH);    //buzzer bunyi dengan delay
      parkir = true;
      delay(800);
    }

    digitalWrite(pinBuzzer, LOW);    //buzzer bunyi dengan delay
    delay(0);
  }
  /*lcd.setCursor(0,0);
    lcd.print(inches);
    lcd.print(" inches");
    delay(0);
    lcd.setCursor(0,1);
    lcd.print(cm);
    lcd.print(" cm");

  */
  delay(0);
}

/*byte byteRead()
{
  byte _msg=0;
  while(digitalRead(scl)==0){}
  uint32_t to=micros();
  for(int i=0;i<8;i++)
  {
    bool t=digitalRead(scl);
    bitWrite(_msg,i,digitalRead(sda));
    while(t==digitalRead(scl) && (to+300)>micros()){}
    if((to+300)<micros())
    {
      return 0;
    }
    else
    {
      to=micros();
    }
  }
  //lcd.setCursor(0, 0);
  Serial.print(_msg);
  delay(2000);
}*/
