 
def bot():
     print("---------------Bot-------------------")
    
 
def Human():
     print("---------------Human-------------------")
    


def greet(bot_name, birth_year):
    bot()
    print('Hello! My name is ' + bot_name + '.')
    print('I was created in ' + birth_year + '.')


def remind_name():
    print('Please, remind me your name.')
    Human()
    name = input("Enter Your Name : ")
    bot()
    print('What a great name you have, ' + name + '!')


def guess_age():
    print('Let me guess your age.')
    print('Enter remainders of dividing your age by 3, 5 and 7.')
    Human()
    rem3 = int(input())
    rem5 = int(input())
    rem7 = int(input())
    age = (rem3 * 70 + rem5 * 21 + rem7 * 15) % 105
    bot()
    print("Your age is " + str(age) + "; that's a good time to start programming!")


def count():
    print('Now I will prove to you that I can count to any number you want.')
    Human()
    num = int(input("Enter any number : "))
    curr = 0
    while curr <= num:
        print(curr, '!')
        curr = curr + 1


def test():
    bot()
    print("Let's test your programming knowledge.")
    # write your code here
    print("""
Why do we use methods?
1. To repeat a statement multiple times.
2. To decompose a program into several small subroutines.
3. To determine the execution time of a program.
4. To interrupt the execution of a program.""")


def test1():
    bot()
    choice = int(input("Choose An Option : "))
    if choice == 2:
        print('Completed, have a nice day!')
    else:
        print("Please, try again")
        test1()
        
def game():
    
    playgame = True
    while playgame:
        
        bot()
        print("I think you wanna play number guissing game , Lets play")
        
        import random 
        # randint function to generate the  
        # random number b/w a to b  

        number = random.randint(1, 100) 
        chances = 0  

        # While loop to count the number 
        # of chances 
        while chances < 10:  
            guess = int(input("Guess a number : ")) 

            if guess == number: 
                bot()
                print(f"Congratulation YOU WON!!! After {chances} time trying") 
                
                playgame = False

                break
            
            elif guess < number: 
                bot()
                print("Your guess was too low: Guess a number higher than", guess) 
                
            else: 
                bot()
                print("Your guess was too high: Guess a number lower than", guess) 
            chances += 1
            
            
        if chances > 10: 
            
            print("YOU LOSE!!! The number is", number) 
            
            playgame = False
        
        
        


greet('Suvo Islam', '2020') 
remind_name()
guess_age()
count()
test()
test1()
game()
print('Congratulations, have a nice day!')
 
