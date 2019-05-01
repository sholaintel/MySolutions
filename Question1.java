/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Arrays;

/**
 *
 * @author Adeife
 */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import java.util.Scanner;

public class Question1 {
    
        static int firstNum;
        static int secondNum;
        static int remainder = 0;
        
        static boolean SignIsEqual(){
            return Math.signum(firstNum) == Math.signum(secondNum);
        }
        
    public static void main(String [] args){
        Scanner Input = new Scanner(System.in);
        System.out.println("Enter the numerator : ");
        firstNum = Input.nextInt();
        System.out.println("Enter the denominator : ");
        secondNum = Input.nextInt();
        
        int result = (firstNum> secondNum) ? firstNum: secondNum;
        result = Math.abs(result);
        int counter = 0;
        
        if(!SignIsEqual()){
            while(result >= 0){
            result = result - Math.abs(secondNum);
            counter++;
        }
        
        if(secondNum< 0 && firstNum> 0) {
            counter = counter * -1;
            remainder = firstNum-(secondNum*counter);
        }
        else if (firstNum< 0 && secondNum> 0){
            remainder = firstNum-(secondNum*counter) * -1;
            counter = counter * -1;
        }
        }
        else if(firstNum> 0 && SignIsEqual()){
            while(result >= Math.abs(secondNum)){
                result = result - Math.abs(secondNum);
                counter++;
            }
            remainder = firstNum- (Math.abs(secondNum) * counter);
        }
        else if (SignIsEqual() && secondNum< 0){
            result = Math.abs(firstNum);
            while(result >= Math.abs(secondNum)){
                result = result - Math.abs(secondNum);
                counter++;
            }
            remainder = firstNum- (secondNum* counter);
        }
        else {
            System.out.println("Problem determining sign");
        }
        System.out.println("Quotient: "  + counter + " Remainder: " + remainder);
    }
}

