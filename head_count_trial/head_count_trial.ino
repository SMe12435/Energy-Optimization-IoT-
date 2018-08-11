

#include <TimeLib.h>
#include <Time.h>

int RELAY_PIN = 4;
int sensorPin = A0;
int sensorPin1 = A1;// select the input pin for LDR
int sensorValue = 0;// variable to store the value coming from the sensor
int sensorValue1 = 0;
int count = 0;
int tstamp = 0;
int tstamp1 = 0;
int countin = 0;
int countout = 0;

void setup() {
  pinMode(RELAY_PIN, OUTPUT);
  pinMode(sensorPin, INPUT);
  pinMode(sensorPin1, INPUT);
  Serial.begin(9600); //sets serial port for communication
  delay(1000);
  sensorValue = analogRead(sensorPin);
  sensorValue1 = analogRead(sensorPin1);
  

  delay(1000);
}
void loop() {


  if(count > 6)
  {
   
                 
          digitalWrite(RELAY_PIN, LOW);
   
    
      }
  else
 
 
  digitalWrite(RELAY_PIN, HIGH);


  sensorValue = analogRead(sensorPin);// read the value from the sensor1
  sensorValue1 = analogRead(sensorPin1);// read the value from sensor2




  if (sensorValue > 400)
  {
    tstamp = now();
    if (countout == 1 && ((tstamp - tstamp1) < 2))
    {
      count--;
      countout = 0;
    }
    else
    {
      countout = 0;
      countin = 1;
    }

  }

  if (sensorValue1 > 400)
  {
    tstamp1 = now();
    if (countin == 1 && ((tstamp1 - tstamp) < 2))
    {
      count++;
      countin = 0;
    }
    else
    {
      countin = 0;
      countout = 1;
    }

  }

  
  
  Serial.println(count);
  //Serial.println(sensorValue);
   //Serial.println(sensorValue1);
  delay(270);
  
}
    
  
  
 
  

  



