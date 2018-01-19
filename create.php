<?php include "get_user.php"; ?>
<?php include "get_assessments.php"; ?>
<?php include "get_units.php"; ?>




<?php
   session_start();
   // Test that the authentication session variable exists
   if ( !isset ($_SESSION["gatekeeper"]))
   {
   	echo "You're not logged in. <a href='signup.php'>Sign up</a> or <a href='login.html'>login</a>";
   }
   else
   {
    ?>
<!DOCTYPE html>
<html>

<head>
          <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Homepage</title>
    
</head>


<body>


    <div id="navbar1" class="navbar navbar-inverse navbar-static-top">
        <div class="container">

            <a href="#" class="navbar-brand">Create Assessment</a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href = "index.php">Dashboard</a> </li>
                    <li class="active"><a href="create.php">Create Assessment</a> </li>
                    <li class="dropdown">

                </ul>




            </div>

        </div>
    </div>


    <main class="lead" "container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="float: right">
                    <?php echo "Welcome: " .$userRecord[name];?>
                    <p>
                        <a href='logout.php'>Log Out!</a>
                    </p>
                </div>
                <div class="well well-sm">

                    <h2 class="text-danger text-center">Create Assessment</h2>
                </div>

                <h3>Create Your Assessment</h3>


            </div>
        </div>
        <ul>
  <li><a class="active" href="createunits.php">Create units </a></li>
  <li><a href="create.php">Create Assessment</a></li>
  <li><a href="createdetails.php">Create Details</a></li>
</ul>


        
        <form id="myForm" name="create" method="post" action="processform2.php">
                <div class="row">
                <div class="col-md-6">
                    
                <br /> Assessment Title:</br>
                <input type="text" name="title">
                <br /> Assessment Number:
                <br />
                <input type="text" name="number">
                <br /> Assesment Type:
                <br />
                <input type="text" name="type">
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                <br /> Restrictions on Time/Length:
                <br />
                <input type="text" name="restrictions">
                <br /> Individual/Group:
                <br />
                <input type="text" name="is_group">
                </div>
        </div>
                                                
                <div class="row">
                    <div class="col-md-6">
                <br /> Assessment Weighting:
                <br />
                <input type="text" name="weighting">
                <br /> Issue Date:
                <br />
                <input type="date" name="issue_date">
                <br />
                </div>
                    </div>
                                                  
                                                  
                                                  
                                                  
                    <div class="row">
                        <div class="col-md-6">
                Hand In Date:
                <br />
                <input type="date" name="handin_date">
                <br /> Feedback Date:
                <br />
                <input type="date" name="planned_feedback_date">
                    </div>
                    </div>
                                
                    <div class="row">
                        <div class="col-md-6">

                <br /> Mode of Submission:
                <br />
                <input type="text" name="mode_of_submission" />
                <br /> Number of copies:
                <br />
                <input type="number" name="number_of_copies" min="1" max="5">
                     </div>
                        </div>
                                                                
                                                                
                    <div class="row">
                        <div class="col-md-6">

                <br />
                   <label> Anonymous marking
                    <input type="radio" name="anonymous_marking" value="yes"> Yes
                    <input type="radio" name="anonymous_marking" value="no"> No
                    <br>
                    Grade Marking
                    <input type="radio" name="grade_marking" value="yes"> Yes
                    <input type="radio" name="grade_marking" value="no"> No                                                 <br></label>
                    Please Select Unit Name
                   <!-- <br />
                    <input type="number" name="unit_id">
                    <br />-->
                    <br/>
                    <select name="unit_id" required>
                        <!--loop here-->
                        <?php while ($unit = $units->fetch()){ ?>
                        
                        <option value="<?php echo $unit[id]; ?>"><?php echo $unit[unit_title]?></option>
                        <!--//end of loop-->
                                                <?php  } ?> 

                    </select>
                    </div>
                        </div>
        </form>
                    
                    <button id="sub">Create Assessment</button>

                <span id="result"></span>
                
            
                <div>
                     
     
        <h2>You can also Create an Assessment from below table</h2>
        
                    <div id="live_data"></div>
                </div>
        
               

    
    
       

        
        
        
        
                
                    
                

    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts1.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<script>
    $(document) .ready(function() {
    function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      
      }
        fetch_data();
         $(document).on('click', '#btn_add', function(){  
           var title = $('#title').text();  
           var type = $('#type').text(); 
            var number = $('#number').text(); 
            var restrictions = $('#restrictions').text(); 
             var is_group = $('#is_group').text(); 
            var weighting = $('#weighting').text(); 
             var issue_date = $('#issue_date').text(); 
            var handin_date = $('#handin_date').text(); 
             var planned_feedback_date = $('#planned_feedback_date').text(); 
            var mode_of_submission = $('#mode_of_submission').text(); 
             var number_of_copies = $('#number_of_copies').text(); 
            var anonymous_marking = $('#anonymous_marking').text(); 
             var grade_marking = $('#grade_marking').text(); 
            var unit_id = $('#unit_id').text(); 

            //var type = $('#unit_id').text(); 
        

           if(title == '')  
           {  
                alert("Enter Assessment Title");  
                return false;  
           }  
           if(type == '')  
           {  
                alert("Enter Assessment Type");  
                return false;  
           }  
              if(number == '')  
           {  
                alert("Enter Assessment Number");  
                return false;  
           }  
           if(restrictions == '')  
           {  
                alert("Enter Assessment Restrictions");  
                return false;  
           }  
              if(is_group == '')  
           {  
                alert("Enter Individual or Group");  
                return false;  
           }  
             
           if(weighting == '')  
           {  
                alert("Enter Assessment Weighting");  restrictions, is_group, weighting, issue_date, handin_date, planned_feedback_date, mode_of_submission, number_of_copies, anonymous_marking, title, grade_marking, unit_id 
                return false;  
           }  
              if(issue_date == '')  
           {  
                alert("Enter Assessment Issue date");  
                return false;  
           }  
             if(handin_date == '')  
           {  
                alert("Enter Assessment Hand in date");  
                return false;  
           }  
              if(planned_feedback_date == '')  
           {  
                alert("Enter Assessment Planned Feedback Date");  
                return false;  
           }  
             if(mode_of_submission == '')  
           {  
                alert("Enter Mode of submission");  
                return false;  
           }  
              if(number_of_copies == '')  
           {  
                alert("Enter Number if copies");  
                return false;  
           }  
             if(anonymous_marking == '')  
           {  
                alert("Enter Anonyms marking");  
                return false;  
           }  
              if(grade_marking == '')  
           {  
                alert("Enter Grade marking");  
                return false;  
           }  
                if(unit_id == '')  
                {  
                    alert("Enter Unit id");  
                    return false;  
                }  
             
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{title:title, type:type, number:number, restrictions:restrictions, is_group:is_group, weighting:weighting, issue_date:issue_date, handin_date:handin_date, planned_feedback_date:planned_feedback_date, mode_of_submission:mode_of_submission, number_of_copies:number_of_copies, anonymous_marking:anonymous_marking, grade_marking:grade_marking, unit_id:unit_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }   
           })
      });
        
        
        function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }
        
         $(document).on('blur', '.title', function(){  
           var id = $(this).data("id1");  
           var title = $(this).text();  
           edit_data(id, title, "title");  
      });
        
        $(document).on('blur', '.type', function(){  
           var id = $(this).data("id2");  
           var type = $(this).text();  
           edit_data(id, type, "type");  
      });
        
           $(document).on('blur', '.number', function(){  
           var id = $(this).data("id3");  
           var number = $(this).text();  
           edit_data(id, number, "number");  
      });
        
           $(document).on('blur', '.restrictions', function(){  
           var id = $(this).data("id4");  
           var restrictions = $(this).text();  
           edit_data(id, restrictions, "restrictions");  
      });
        
           $(document).on('blur', '.is_group', function(){  
           var id = $(this).data("id5");  
           var is_group = $(this).text();  
           edit_data(id, is_group, "is_group");  
      });
        
           $(document).on('blur', '.weighting', function(){  
           var id = $(this).data("id6");  
           var weighting = $(this).text();  
           edit_data(id, weighting, "weighting");  
      });
        
        
           $(document).on('blur', '.issue_date', function(){  
           var id = $(this).data("id7");  
           var issue_date = $(this).text();  
           edit_data(id, issue_date, "issue_date");  
      });
        
           $(document).on('blur', '.handin_date', function(){  
           var id = $(this).data("id8");  
           var handin_date = $(this).text();  
           edit_data(id, handin_date, "handin_date");  
      });
        
           $(document).on('blur', '.planned_feedback_date', function(){  
           var id = $(this).data("id9");  
           var planned_feedback_date = $(this).text();  
           edit_data(id, planned_feedback_date, "planned_feedback_date");  
      });
        
           $(document).on('blur', '.mode_of_submission', function(){  
           var id = $(this).data("id10");  
           var mode_of_submission = $(this).text();  
           edit_data(id, mode_of_submission, "mode_of_submission");  
      });
        
           $(document).on('blur', '.type', function(){  
           var id = $(this).data("id11");  
           var type = $(this).text();  
           edit_data(id, type, "type");  
      });
        
           $(document).on('blur', '.number_of_copies', function(){  
           var id = $(this).data("id12");  
           var number_of_copies = $(this).text();  
           edit_data(id, number_of_copies, "number_of_copies");  
      });
        
           $(document).on('blur', '.anonymous_marking', function(){  
           var id = $(this).data("id13");  
           var anonymous_marking = $(this).text();  
           edit_data(id, anonymous_marking, "anonymous_marking");  
      });
        
        $(document).on('blur', '.grade_marking', function(){  
           var id = $(this).data("id14");  
           var grade_marking = $(this).text();  
           edit_data(id, grade_marking, "grade_marking");  
      });
        
        $(document).on('blur', '.unit_id', function(){  
           var id = $(this).data("id14");  
           var unit_id = $(this).text();  
           edit_data(id, unit_id, "unit_id");  
      });
        
        $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id15");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
        
});
</script>

<?php
   }
   ?>