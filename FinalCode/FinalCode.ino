#include <TimeLib.h>
#include <Time.h>

int sensorPin = A0;
int sensorPin1 = A1;// select the input pin for LDR
int sensorValue = 0;// variable to store the value coming from the sensor
int sensorValue1 = 0;
int count = 0;
int tstamp = 0;
int tstamp1 = 0;
int countin = 0;
int countout = 0;
int led[4];
int i=0;
int j = 4;

void setup() {

  pinMode(sensorPin, INPUT);
  pinMode(sensorPin1, INPUT);
  Serial.begin(9600); //sets serial port for communication
  delay(1000);
  sensorValue = analogRead(sensorPin);
  sensorValue1 = analogRead(sensorPin1);
   while(i<4)
{
  led[i++] = j;
  j++;
}
  pinMode(led[0], OUTPUT);
  pinMode(led[1], OUTPUT);
  pinMode(led[2], OUTPUT);
  pinMode(led[3], OUTPUT);


  delay(1000);
}
void loop() {
    if(count==0)
 {
  digitalWrite(led[0], LOW);
  digitalWrite(led[1], LOW);
  digitalWrite(led[2], LOW);
  digitalWrite(led[3], LOW);
 }
 else if(count>0 && count<=7)
 {
  digitalWrite(led[0], HIGH);
  digitalWrite(led[1], LOW);
  digitalWrite(led[2], LOW);
  digitalWrite(led[3], LOW);
 }
 else if(count>7 && count<=14)
 {
  
  digitalWrite(led[0], HIGH);
  digitalWrite(led[1], HIGH);
  digitalWrite(led[2], LOW);
  digitalWrite(led[3], LOW);
 }
 
 else if(count>14 && count<=21)
 {
  
  digitalWrite(led[0], HIGH);
  digitalWrite(led[1], HIGH);
  digitalWrite(led[2], HIGH);
  digitalWrite(led[3], LOW);
 }
 
 else if(count>21 && count<=28)
 {
  
  digitalWrite(led[0], HIGH);
  digitalWrite(led[1], HIGH);
  digitalWrite(led[2], HIGH);
  digitalWrite(led[3], HIGH);
 }
 

 


  sensorValue = analogRead(sensorPin);// read the value from the sensor1
  sensorValue1 = analogRead(sensorPin1);// read the value from sensor2




  if (sensorValue > 700)
  {
    tstamp = now();
    if (countout == 1 && ((tstamp1 - tstamp) < 2))
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

  if (sensorValue1 > 700)
  {
    tstamp1 = now();
    if (countin == 1 && ((tstamp - tstamp1) < 2))
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
  delay(280);
  


 
  
}


    
  
  
 
  

  



