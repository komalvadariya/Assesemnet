
//OOPS Concepts Assessemnet:

#include <iostream>
using namespace std;

class Name{
     public:
    string name; 
    
    void input()
    {   cout<<"---------Tops Tech FastFood----";
        cout<<"\n Please Enter your Name:";
        cin>>name; 
        cout<<" \n Hello "<<name;
    }
};
        
    class choice
    {
        public:
        char choice,ch,c;
        int num;
        
        
        void display(){
            do{
        cout<<"\n what would you like to order?:"; 
        
       cout<<"\n------Menu--------";
       cout<<"\n1) Pizza";
       cout<<"\n2) Burger"; 
       cout<<"\n3) Sandwich"; 
       cout<<"\n4) Rolls"; 
       cout<<"\n5) Biryani";
       cout<< "\n Please Enter your Choice : ";
       cin>>choice;
       
       if(choice == '1')
       {
           cout<<"\n1 Club Pizza Rs.240";
           cout<<"\n2 veg. Crispy Pizza Rs.160";
           cout<<"\n3 Extreme Veg Pizza Rs.100";
           
              
        cout<< "\n Please Enter which Pizza would you like to have?: ";
        cin>>ch; 
        
        cout<<"\n Please Enter Quantity :";
        cin>>num;
        
           switch(ch) 
        { 
        case '1': 
        cout<<"\n1 Club Pizza";
        cout<<"\n Your Total Bill is "<<num*240;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thankyou For Ordering From Tops Tech Fast Food"; 
        break;
         case '2': 
        cout<<"\n2 Veg Crispy Pizza";
        cout<<"\n Your Total Bill is "<<num*160;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thank you for Ordering From Tops Tech Fast Food"; 
        break;
          case '3': 
        cout<<"\n3 Extreme Veg Pizza";
        cout<<"\n Your Total Bill is "<<num*100;
        cout<<"\n your Order Will be delvered in 40 minutes ";
        cout<<"\n Thank you For Ordering From Tops Tech Fast Food"; 
        break;
        }
       }
      else if(choice == '2')
       {
           cout<<"\n1 Club Burger Rs.240"; 
           cout<<"\n2 Veg. Crispy Burger Rs.160";
           cout<<"\n3 Extreme Veg Burger Rs.100";
           
           
        cout<< "\n Please Enter which Burger would you like to have ? :";
        cin>>ch; 
        
        cout<<"\n Please Enter Quantity :";
        cin>>num;
        
           switch(ch) 
        { 
        case '1': 
        cout<<"\n1 Club Burger";
        cout<<"\n Your Total Bill is "<<num*240;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thankyou For Ordering From Tops Tech Fast Food"; 
        break;
         case '2': 
        cout<<"\n2 Veg Crispy Burger";
        cout<<"\n Your Total Bill is "<<num*160;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thank you for Ordering From Tops Tech Fast Food"; 
        break;
          case '3': 
        cout<<"\n3 Extreme Veg Burger";
        cout<<"\n Your Total Bill is "<<num*100;
        cout<<"\n your Order Will be delvered in 40 minutes ";
        cout<<"\n Thank you For Ordering From Tops Tech Fast Food";
        break;
        }
       } 
       
      else  if(choice == '3')
       {
           cout<<"\n1 Club Sandwich  Rs.240";
           cout<<"\n2 Veg. Crispy Sandwich  Rs.160";
           cout<<"\n3 Extreme Veg Sandwich Rs.100";
           
        cout<< "\n Please Enter which Sandwich would you like to have ?: ";
        cin>>ch; 
        
        cout<<"Please Enter Quantity  : ";
        cin>>num;
        
        switch(ch) 
        { 
        case '1': 
        cout<<"\n1 Veg Sandwich";
        cout<<"\n Your Total Bill is "<<num*240;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thankyou For Ordering From Tops Tech Fast Food";  
        break;
         case '2': 
        cout<<"\n2 Veg. Crispy Sandwich";
        cout<<"\n Your Total Bill is "<<num*160;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thank you for Ordering From Tops Tech Fast Food"; 
        break;
          case '3': 
        cout<<"\n3 Extreme Veg Sandwich";
        cout<<"\n Your Total Bill is "<<num*100;
        cout<<"\n your Order Will be delvered in 40 minutes ";
        cout<<"\n Thank you For Ordering From Tops Tech Fast Food";
        break;
        }
       } 
       else  if(choice == '4')
       {
           cout<<"\n1 Club Rolls Rs.240";
           cout<<"\n2 Veg. Crispy Rolls Rs.160";
           cout<<"\n3 Extreme Veg Rolls Rs.100";
           
            
        cout<< "\n Please Enter which Rolls  would you like to have ?:";
        cin>>ch; 
        
        cout<<"Please Enter Quantity  :";
        cin>>num;
        
           switch(ch) 
        { 
        case '1': 
        cout<<"\n1 Club Rolls";
        cout<<"\n Your Total Bill is "<<num*240;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thankyou For Ordering From Tops Tech Fast Food";  
        break;
         case '2': 
        cout<<"\n2 Veg. Crispy Rolls";
        cout<<"\n Your Total Bill is "<<num*160;
        cout<<"\n Your Order Will be delvered in 40 Minutes ";
        cout<<"\n Thank you for Ordering From Tops Tech Fast Food"; 
        break;
          case '3': 
        cout<<"\n3 Extreme Veg Rolls";
        cout<<"\n Your Total Bill is "<<num*100;
        cout<<"\n your Order Will be delvered in 40 minutes ";
        cout<<"\n Thank you For Ordering From Tops Tech Fast Food"; 
        break;
        }
       } 
        else  if(choice == '5')
       {
           cout<<"\n1 Club Biryani   Rs.240";
           cout<<"\n2 Veg. Briyani   Rs.160";
           cout<<"\n3 Extreme Veg Biryani  Rs.100";
              
        cout<< "\n Please Enter which Biryani would you like to have ?:";
        cin>>ch; 
        
        cout<<"Please Enter Quantity  :";
        cin>>num;
        
           switch(ch) 
        { 
        case '1': 
        cout<<"\n1 Club Biryani";
        cout<<"\n Your Total Bill is "<<num*240;
        cout<<"\n Your Order Will be delivered in 40 Minutes ";
        cout<<"\n Thankyou For Ordering From Tops Tech Fast Food"; 
        break;
         case '2': 
        cout<<"\n2 Veg Biryani";
        cout<<"\n Your Total Bill is "<<num*160;
        cout<<"\n Your Order Will be delivered in 40 Minutes ";
        cout<<"\n Thank you for Ordering From Tops Tech Fast Food"; 
        break;
          case '3': 
        cout<<"\n3 Extreme Veg Biryani";
        cout<<"\n Your Total Bill is "<<num*100;
        cout<<"\n your Order Will be delivered in 40 minutes ";
        cout<<"\n Thank you For Ordering From Tops Tech Fast Food"; 
        break;
        }
       } 
       cout<< " \n would you like to order anything else ?: Y / N :";
       cin>>c;
        }
       while ( c=='Y');
       if(c=='N')
       {
           cout<<"Thank you"; 
       }
       
        
        }
       
       
       
       
    
    
    
}; 
int main()
{
    
    Name obj;
    choice obj2;
    obj.input();
    obj2.display();
return 0; 
}

