import time 
start_car = True

# Start the car 
while (start_car):
    
    print("Car is running..............................")
    
    time.sleep(5)
    
    car_in_front = int(input("Enter a value 0/1 to check is there any car infront of my car : "))
    
    # 0 means there is no car in front of my car 
    # 1 Means there is a car in front of my car
    
    if car_in_front == 0:
        
        print("Car is running......")

        time.sleep(5)
        
        car_state = int(input("Is the car reach the goal state : "))
        
        if car_state== 1:
            
            print("Hurrah finally i reach my Goal")
            
            start_car = False
            
            break
    
        else:
            
            print("Car is running until reach the goal")
            start_car = False
    
    
    else:
        print("There is a car infront of my car SO ")
        print("Wait for sometime(car running , just slow the car or balance the speed)......")
        time.sleep(5)
        
        left_right_side = int(input("check Is the left or right side is clear or not : "))
        
        # 0 means clear 
        # 1 means unclear
        
        if left_right_side==0:
            
            print("Turn left or Right and forward.")
            print("Car is running...........")
            time.sleep(5)
            
            car_state = int(input("Is the car reach the goal state : "))
            # 1  means reach the Goal
            # 0  means not reach the goal
            
            if car_state==1:
                
                print("Hurrah finally i reach my Goal")
                start_car = False
                break
            
            else:
                print("Car is running until reach the goal")
                
            
        