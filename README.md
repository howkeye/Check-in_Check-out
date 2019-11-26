# Check-in_Check-out
* This Project assignment for Summergeeks by Innovancer 
* It is hosted at http://almat.almafiesta.com/assignment/
* Used php as backend language and html css (using bootstrap as framework) as frontend.
* Mysql as database.



## Feature Supported
* One can register ( check-in) a guest along with host details.
* Host will get a mail.
* When Host is checked-out mail will be send to host.
* One can also see the list of all visited custmers.


# Files and description
1. Index.html : It contains registration form 
                If form is submitted it goes to checkin.php
              
2. checkin.php : It connects to database and insert the provided guest data in the table.
                 It also sends mail.
                 
                 
3. checkout.php : It connects to database and displays the data of geust who have checked in.
                 User can be selected and then checked out ( and redirected to out.php).
                 
         
4. out.php : It removes the data as provided by checkout.php.
              And then sends the mail.
5. list.php : It displays all the users that have checked in or checked out.
                 

# Website  Screenshot
Index Page  ( @time of Chcek-in)          |
:----------------------------------------------------:|
![](https://i.imgur.com/0RsZOn5.png)  |

checkout page  ( @time of Chcek-in)            | list page  
:----------------------------------------------------:|:-----------------------------------:
![](https://i.imgur.com/l1Qw9Xq.png)           | ![](https://i.imgur.com/3esRpdD.png) 





# Mail screenshots
Mail sent to visiter  ( @time of Chcek-in)            |  mail send to Host( @time of Chcek-out)
:----------------------------------------------------:|:-----------------------------------:
![](https://i.imgur.com/Hlgl4R8.png)                | ![](https://i.imgur.com/Hlgl4R8.png) 



