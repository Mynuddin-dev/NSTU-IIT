/*
Name: Md Mynuddin
Roll No: ASH1825007M
Email: dp@mynuddin2513@student.edu.nstu.bd#2021
Date: 22/9/2021

 */
package SE3110_Question4;

import java.util.ArrayList;

/**
 * @author Mynuddin 
 * In order to introduce a new type of fruit, the programmer
 * would have to change the scoreFruit method. SO Its violate the Open closed
 * Principle. We know that in Open closed principle “Open for Extension, Closed
 * For Modification”. That means existing code is not being change .
 *
 */
public class Player {

    public void scoreFruit(String fruitType) {
        if (fruitType.equals("banana")) {
            this.score += 5;
        } else if (fruitType.equals("apple")) {
            this.score += 20;
        } else if (fruitType.equals("jackfruit")) {
            this.score += 50;
        }
        
        
    }
}

//dp@mynuddin2513@student.edu.nstu.bd#2021
