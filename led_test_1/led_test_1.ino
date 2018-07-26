int count = 0;
int led[4];
int i=0;
int j = 4;


void setup() {
  Serial.begin(9600);
  while(i<4)
{
  led[i++] = j;
  j++;
}
  pinMode(led[0], OUTPUT);
  pinMode(led[1], OUTPUT);
  pinMode(led[2], OUTPUT);
  pinMode(led[3], OUTPUT);
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

count ++;
delay(350);


Serial.println(count);
}
