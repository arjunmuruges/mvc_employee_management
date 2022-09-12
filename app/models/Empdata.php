<?php
 class Empdata extends Database
{
    public function addinfo($postdata,$target_file)
{  
    // $Emp_id=$postdata['id'];
    $Emp_fname=$postdata['fname'];
    $Emp_lname=$postdata['lname'];
    $Emp_email=$postdata['email'];
    $Emp_number=$postdata['number'];
    $Emp_street=$postdata['street'];
    $Emp_state=$postdata['state'];
    $Emp_country=$postdata['country'];
    $pincode=$postdata['pincode'];
    $image=$target_file;
    
$this->query("insert into employee(Emp_fname,Emp_lname,Emp_email,Emp_number,Emp_street,Emp_state,Emp_country,pincode,image)
values('$Emp_fname','$Emp_lname','$Emp_email','$Emp_number','$Emp_street',' $Emp_state','$Emp_country','$pincode','$image')");
        $this->execute();
        // echo "insert done succesfully";
}
public function display()
{
    $this-> query("select *  from employee");
    return $this->resultSet(); 
}

public function mdelete($Emp_id){
    $this->query("DELETE FROM employee  WHERE Emp_id='$Emp_id'");
    return $this->execute();
    
}
public function emppedit($Emp_id)
{
    //die("dsfsdf");
    $this->query("SELECT  * FROM employee  WHERE Emp_id='$Emp_id'");
   return  $this->resultSet();

}
public function emppedit1($data,$target_file)
{
    $Emp_id=($data[0]);
    $Emp_fname=($data[1]);
    $Emp_lname=($data[2]);
    $Emp_email=($data[3]);
    $Emp_number=($data[4]);
    $Emp_street=($data[5]);
    $Emp_state=($data[6]);
    $Emp_country=($data[7]);
    $pincode=($data[8]);
    $image=$target_file;
    $this->query("UPDATE employee SET Emp_id='$Emp_id', Emp_fname='$Emp_fname', Emp_lname='$Emp_lname', Emp_email='$Emp_email', Emp_number='$Emp_number',Emp_street='$Emp_street',Emp_state='$Emp_state',Emp_country='$Emp_country',pincode='$pincode',image='$image' WHERE Emp_id ='$Emp_id'");
    $this->execute();
}

public function search()
{
    
    $Emp_id=$_POST['search'];
    $this->query("SELECT * FROM employee WHERE Emp_id = $Emp_id ");
    return $this->resultSet();
    
}

}
