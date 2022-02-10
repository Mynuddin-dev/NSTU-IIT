import random

# Randomly take an temperature as input and check the Weather condition 
# According to the temperature After that AC is on 

temperature = random.randint(10, 45)

print("Temperature is ",temperature," degree")
if temperature >=10 and temperature<= 20 :
    print("BOOSS the room weather is cold , AC is On and make the Room Cold to Normal")

elif temperature >20 and temperature <=30:
    print("BOSS The room Weather is normal , AC is off")
    
else:
    print("BOSS the room weather is hot , AC is on and make to room Normal")
