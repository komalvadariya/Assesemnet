#include <stdio.h>  

 
  
int main()  
{  
    int ans, num1, num2;  
    float result;  
     
    do  
    {  
        printf ("-------------MENU------------- ");  
        printf (" \n 1 Addition \n 2 Subtraction \n 3 Multiplication \n 4 Division  \n  ");      
          
        scanf ("%d", &ans); 
        
    switch (ans)  
    {  
        case 1:  
            // Add two numbers  
            printf (" Enter your choice: Addition");  
            printf ("\n Enter First Number: ");  
            scanf (" %d", &num1);  
            printf (" Enter Second Number: ");  
            scanf (" %d", &num2);  
            result = num1 + num2; 
            printf (" Addition: %f", result);  
            break; 
              
        case 2:  
            // Subtract two numbers  
            printf (" Enter your choice: Subtraction");  
            printf ("\n Enter First Number: ");  
            scanf (" %d", &num1);  
            printf (" Enter Second Number: ");  
            scanf (" %d", &num2);  
            result = num1 - num2;   
            printf (" Subtraction: %f", result);  
            break;  
              
        case 3:  
            // Multiplication of the numbers  
            printf (" Enter your choice: Multiplication");  
            printf ("\n Enter First Number: ");  
            scanf (" %d", &num1);  
            printf (" Enter Second Number: ");  
            scanf (" %d", &num2);  
            result = num1 * num2;  
            printf (" Multiplication: %f", result);  
            break; 
              
        case 4:  
            // Division of the numbers  
            printf (" Enter your choice: Division");  
            printf ("\n Enter First Number: ");  
            scanf (" %d", &num1);  
            printf (" Enter Second Number: ");  
            scanf (" %d", &num2);  
            
                
            result = num1 / num2;   
            printf (" Division: %f", result);  
            break;   
              
        
        
              
        default:  
            printf(" Invalid choice!! ");  
            break;                        
    }  
    printf (" \n \n -------------------- \n ");  
    } while (ans != 5);  
  
    return 0;        
}  

