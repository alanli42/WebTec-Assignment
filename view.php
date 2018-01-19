<?php include "retrieveAvatar1.php"; ?>
<?php
   session_start();
   // Test that the authentication session variable exists
   if ( !isset ($_SESSION["gatekeeper"]))
   {
   	echo "You're not logged in. <a href='signup.php'>Sign up</a> or <a href='loginpage.html'>login</a>";
   }
   else
   {
        include "get_assessment.php";
   
    ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <title>Assessment</title>
   </head>
   <body>
      <div id="navbar1" class = "navbar navbar-inverse navbar-static-top">
         <div class = "container">
            <a href = "#" class = "navbar-brand">Assessment Task</a>
            <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            </button>
            <div class = "collapse navbar-collapse navHeaderCollapse">
               <ul class = "nav navbar-nav navbar-right">
                  <li class = "active"><a href = "index.php">Dashboard</a> </li>
                  <li><a href = "create.php">Create Assessment</a> </li>
                  <li class = "dropdown">
               </ul>
            </div>
         </div>
      </div>
      <main class="lead" "container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div style="float: right">
                  <?php
                     echo "Welcome: " .$userRecord[name];
                     ?>
                  <p>
                     <a href='logout.php'>Log Out!</a>
                  </p>
               </div>
               <div class="well well-sm">
                  <h2 class="text-danger text-center">Southampton Solent University</h2>
               </div>
               <h3>Assessment Brief</h3>
               <table class="table table-condensed table-bordered table-responsive">
                  <tbody>
                     <tr>
                        <th>Unit Title:</th>
                        <td><?php echo $assessment[unit_title]; ?></td>
                     </tr>
                     <tr>
                        <th>Unit Code:</th>
                        <td><?php echo $assessment[code]; ?></td>
                     </tr>
                     <tr>
                        <th>Unit Leader:</th>
                        <td><?php echo $assessment[leader]; ?></td>
                     </tr>
                     <tr>
                        <th>Level:</th>
                        <td><?php echo $assessment[level]; ?></td>
                     </tr>
                     <tr>
                        <th>Assessment Title:</th>
                        <td><?php echo $assessment[title]; ?></td>
                     </tr>
                     <tr>
                        <th>Assessment Number:</th>
                        <td><?php echo $assessment[number]; ?></td>
                     </tr>
                     <tr>
                        <th>Assesment Type:</th>
                        <td><?php echo $assessment[type]; ?></td>
                     </tr>
                     <tr>
                        <th>Restrictions on Time/Length:</th>
                        <td><?php echo $assessment[restrictions]; ?></td>
                     </tr>
                     <tr>
                        <th>Individual/Group:</th>
                        <td><?php echo $assessment[is_group]; ?></td>
                     </tr>
                     <tr>
                        <th>Assessment Weighting:</th>
                        <td><?php echo $assessment[weighting]; ?></td>
                     </tr>
                     <tr>
                        <th>Hand In Date:</th>
                        <td><?php echo $assessment[handin_date]; ?></td>
                     </tr>
                     <tr>
                        <th>Mode of Submission:</th>
                        <td><?php echo $assessment[mode_of_submission]; ?></td>
                     </tr>
                     <tr>
                        <th>Number of copies to be submitted:</th>
                        <td><?php echo $assessment[number_of_copies]; ?></td>
                     </tr>
                     <tr>
                        <th>Anonymous marking:</th>
                        <td><?php echo $assessment[anonymous_marking]; ?></td>
                     </tr>
                     <tr>
                        <th>Exemption from Grade Marking:</th>
                        <td><?php echo $assessment[grade_marking]; ?></td>
                     </tr>
                  </tbody>
               </table>
                <?php echo $assessment[description]; ?>
                        <h3><strong> Assessment Criteria </strong></h3>
                        <table class="table table-condensed table-bordered table-inverse table-responsive table-hover table-striped">
                           <tbody>
                              <tr>
                                 <th class="bg-danger"> Grades: N, S, F3,F2,F1</th>
                                 <th>Grades: D3,D2,D1</th>
                                 <th class="bg-warning">Grades: C3,C2,C1</th>
                                 <th>Grades: B3,B2,B1</th>
                                 <th class="bg-success">Grades: A4,A3,A2,A1</th>
                              </tr>
                           </tbody>
                           <tbody>
                              <tr>
                                 <th colspan="4">Literature Review and Research Question</th>
                                 <th>Weighting 1/3</th>
                              </tr>
                              <tr>
                                 <th class="bg-danger" scope="row">Little or no clear evidence of supporting literature. Poor quality or biased information. No clear statement of research question</th>
                                 <th>Research question clearly stated. Identifies a range of relevant written sources, writing in an appropriate academic style.</th>
                                 <th class="bg-warning">Identifies a range of relevant key themes, using appropriately cited sources, and linking these to derivation of research hypotheses and using to support analysis and conclusions.</th>
                                 <th>Systematically analyses a wide range of appropriate sources, analysing the full range of issues associated with the project.</th>
                                 <th class="bg-success">Comprehensive literature review following a clearly defined approach covers the full range of issues associated with the project, and have been fully used in the support of the project conduct.</th>
                              </tr>
                              <tr>
                                 <th colspan="4">Methodology and Method</th>
                                 <th>Weighting 1/3</th>
                              </tr>
                              <tr>
                                 <th class="bg-danger" scope="row">Inappropriate or poorly expressed research methodology and method.</th>
                                 <th>Evidence that appropriate methodology and methods have been applied in a planned fashion to resolve specified research question. Expressed in an appropriate academic writing style</th>
                                 <th class="bg-warning">Research methodology and method clearly stated and derived from literature with some analysis and justification of the approach used.</th>
                                 <th>Detailed analysis of the literature to develop appropriate methodology and method based on clearly defined criteria, supported and justified by a wide range of sources.</th>
                                 <th class="bg-success">Comprehensive analysis of research question and literature clearly leads to a detailed methodology and method, with an excellent level of justification and support for the proposed approach.</th>
                              </tr>
                              <tr>
                                 <th colspan="4">Results, Analysis and Conclusion</th>
                                 <th>Weighting 1/3</th>
                              </tr>
                              <tr>
                                 <th class="bg-danger" scope="row">Poor quality or limited results, Poorly or inappropriately analysed data.</th>
                                 <th>Simple tools used to generate basic results, with simple analysis, writing in an appropriate academic style.</th>
                                 <th class="bg-warning">Range of tools used to analyse a good quality dataset, conclusions supported by and linked to some theory </th>
                                 <th>High quality dataset, Detailed analysis with high level of supporting theory arriving at logical conclusions with analysis of the validity of the conclusion.</th>
                                 <th class="bg-success">Comprehensive, high quality dataset. Excellent analysis of data, highly theorized with a detailed and excellent quality conclusion taking into account all parameters of the study.</th>
                              </tr>
                           </tbody>
                        </table>
                        <h4 class="text-right"> Created by Huseyin Alanli</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>
<?php
   }
   ?>