<?php
session_start();
?>

<html>
<head>
<style>.header{
padding-top:3%;
height:55px;
width:100%;
color:skyblue;
font-family: "Times New Roman";
text-align:center;
border-radius:8px;
font-size:23;
}
.header p{
padding-top:15px;
}
.button{
height:100%;
width:100%;

border-radius:20px;
box-shadow:0 8px 0 yellow;
color:white;
cursor:grab;
margin-top:7px;
padding-left:17px ;
}
.button:active{
box-shadow:2px 2px 0 black;
transform:translatey(5px);
cursor:grabbing;
}
a{
color:white;
}
.outbox{
left:2%;
width:95%;
border-radius:50px;
border:10px solid black;
position: relative;
overflow:hidden;
}
.slider{
position:relative;
height:360px;
width:700%;
opacity: 0.8;
animation-name:kutty;
animation-duration:10s;
animation-itearation-count:3;
}
.slider img{

float:left;
}
@keyframes kutty{
0%{
left:0%;
}
25%{
left:-125%;
}
50%{
left:-250%;
}
75%{
left:-325%;
}
100%{
left:-450%;
}
}
#navlist {
  position:-webkit-sticky;
 position:sticky;
}

#navlist li {
overflow:hidden;
 
  padding: 0px;
  list-style-type: none;
 box-shadow:10px 10px 1px silver;	
 border-radius:20px;
  top: 0;
  opacity: 0.8;
 
}

#navlist li, #navlist a {
  top: 30%;
  height: 200px;
  display: block;
 position:-webkit-sticky;
 position:sticky;
cursor:grab;
}

#admin {
  position:fixed;
  left: 10%;
  width:15%;
  background: url('admin.png') 10% 0;
 
}

#student {
     position:fixed;
  left: 40%;
  width:15%;
  background: url('student.jpg') 59% 40%;
}

#staff {
 position:fixed;
  left:70%;
  width: 15%;
color:red;
background-color:red;
  background: url('staff.png') 10% 0;
}
#navlist li:active{
box-shadow:2px 2px 20px aqua;
transform:translatey(5px);

cursor:grabbing;
}
#navlist li:hover{
cursor:grab;
z-index:100%;

width:16%;height: 206px;
}
.scroll{
height:220px;
width:15%;
margin-top:83px;
text-align:center;
border:5px double red;
border-radius:25px;
margin-left:1135px;
position:fixed;
opacity: 0.8;
}
.anim{
position:absolute;
animation:mat 2s infinite;
width:11%;
color:blue;
margin-top:2%;
margin-left:80%;

border-radius:10px;
border:5px double blue;
cursor:not-allowed;
}
@webkit-keyframes mat{
from{
border:1px solid green;
}to{
border:10px dotted red;
}}
@keyframes mat{
from{
box-shadow:0px 0px 0px #222222;
}to{
box-shadow:10px 10px 10px #999999;
}
}

.img{
min-height:100%;
min-width:100%;
position:fixed;
opacity: 0.3;
}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-image:url('headerimg1.jpg');
  background-size:cover;
}

.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  color: white;
  text-shadow: 2px 2px 5px darkgrey;
  font-family: "Times New Roman";
  transform: translate(-50%, -50%);
  position: absolute;
  top: 40%;
  left: 50%;
}

.logo {
  color:#fff;
  font-weight:800;
  font-size:14pt;
  padding:25px;

  text-align:center;
}

.lee {
position:relative;
  width:6em;

border-right:2px solid red;
font-size:180%;

  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.leee {
position:relative;
  width:6em;

margin-left:40%;
border-right:2px solid red;
font-size:180%;
text-align:center;
  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.leen {
position:relative;
  width:6em;

margin-left:70%;
border-right:2px solid red;
font-size:180%;
text-align:right;
  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.anim-typewriter{
color:gold;
animation:typewriter 2s steps(9) 1s infinite normal both,
blinktextcursor 190ms steps(9) infinite normal;
}
@keyframes typewriter{
from{
 width:0;
}
to{
width:6em;
}
}
@keyframes blinktextcursor{
from{
 border-right-color:red;
}
to{
border-right-color:transparent;
}
}
.order{ 
  border-radius: 25px;
  border: 5px double green;
  padding: 10px;
  margin-left: 34.5%;
  width: 30%;
  height: 160px;
  text-align: center;
}


.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New"
  font-size: 20px;
  background-color: black;
  color: white;
}




.wide2{
  width:100%;
  height: 100%;
  height:calc(100% - 1px);
}
.box{
  top: 10px;
  color:black;
    text-align:center;

}

.tickicon{
  color: green;
}



.bg-4{
  background-color: blue;
  color:skyblue;

}

footer{
  display: block;
}

.wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-size:cover;
}

.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  text-shadow: 2px 2px 10px black;
  color: white;
  font-family: "Times New Roman";
  padding-top: 12%;
}

.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Sans serif";
  background-color: #DCDCDC;
}

.paragraph2 {
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid GREY;

 }

.goldcolor{
  color: #D4AF37;

}

.form-area {
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border-radius:50px;
  border: 3px solid blue;
  opacity:0.9;
}



.heading {
  text-align: center;
  background-color:;
  padding: 30px;
  font-size: 40px;
}


.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New"
  font-size: 20px;
  background-color: black;
  color: white;
}



.edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}


.edit2{
  font-size: 20px;
}


.missionbox{
  border-radius: 20px;
  background-color: green;
  color: white;
  border: 2px solid yellow;
  box-shadow: 2px 2px 100px black;
  padding: 20px;
  margin-left: 5%;
  width: 90%;
  height: 120px;
  text-align: center;
}

.missionfont{
  font-size: 45px;
}

.paragraph3{
  text-align: center;
  padding: 60px;
  height: 250px;
  font-family: "Sans serif";
  background-color: #DCDCDC;
}

.darkgoldcolor{
  color: #996515;

}
  </style>
     </head>
  <link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">

   <link rel="stylesheet" type = "text/css" href ="css\bootstrap.min.css">
      

  <body><div class="img" style="margin-top:-10%;">
 <img src="images\backgro.jpg"height="800px"width="100%" ></div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
     <b><u>^</u><b/>
    </button>
    <script type="text/javascript">
    window.onscroll = function scrollToTop()
      {
        window.scrollTo({top:0,behavior:'smooth'});
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
   
        document.documentElement.scrollTop = 0;

      }
    </script>


  <nav class="navbar navbar-inverse navbar-sticky-bottom"role="navigation"style="background:;border:10px double white;border-radius:20px;">
 <div class="header" style="color:white;padding:3px;"align="center"><h1><u>LaKshu's Canteen an Service </u></h1></div>
      <div class="container">
        <div class="navbar-header">
        
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <a class="navbar-brand" href="index.php"><i class="fas fa-home">LaKshu | Home</i></a>
        </div>
         <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav" >
            <li><a href="aboutus.php" >About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>  </ul>
	<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mycanteen.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php">Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><i class="fas fa-utensils">Food Zone </i></a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </i></a></li>
            <li><a href="logout_u.php"><i class="fas fa-sign-out-alt"> Log Out </i></a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > Sign Up  </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Login </a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>
<div class="container" style="width:100%;background-color:skyblue;border:10px double white;border-radius:20px;padding:10px;align:center;">

<div class="order" style="margin-top:2px;">
    <h2>Feel Hungry...?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" style="z-index:1;position:relative;"role:"button"> Order Now </a></center>
    </div>   
        <marquee><b><i><u>This site under process please wait few mins.</u></i></b></marquee>
  
<ul id="navlist">

<li id="admin"><a href="managerlogin.php"></a></li><div style="text-align:justify;background-color:black;color:white;"><h1 class="lee anim-typewriter">MANAGER....</h1><p>How would you define "manager?" Google will tell you a manager is "a person responsible for controlling or administering all or part of a company or similar organization." That sounds easy enough like anyone can be a manager.
. 
But what makes a good manager? The kind that inspires a team, fosters growth and productivity, and frequently asks for feedback on their management style? Simply managing a team doesn't make a good manager. It's the amount of effort and leadership they put into making their team successful. 
So, what makes a good manager?
Here are some best practices of good managers:

1. They have their team's back 
Do you have your team's back? During one-on-ones, it’s easy to side with your team members, but are you consistent around your boss? Good managers aren't afraid to stand up to their directors and defend the team's ideas and efforts. However, good managers won't always take their team's side. They're upfront and honest with their team when it comes to pushback from executives. 
2. They have their team's trust

It's important to ask yourself: does my team trust me? Oftentimes, managers say one thing to appease their team, and then do another which leads to manipulation and mistrust from the team. Good managers keep promises to their team and provide explanations (not excuses) when plans change. Earning trust is a form of respect, and respect is fundamental to leadership. 
3. They aren't afraid to get their hands dirty
Many poor managers believe busywork should be left to their employees. They leave tedious tasks to the team, no matter how many fire drills are thrown at them. Diving in and getting involved with your team on important projects is the difference between a boss and a leader. Good managers understand that failure reflects both on the team and on the manager, which is why they jump in to help out in any way possible, no matter how mundane the task.
4. They want you to succeed as individuals, and as a team
Part of what makes a good manager is remembering that your team is made up of individuals who strive to reach their own personal goals as well as the team's goals. Good managers make it a priority to meet with each individual within their team to discover strengths and find ways to work on weaknesses. 
5. They are transparent 
When it comes to important decisions, big project updates, and crucial changes within the organization, good managers keep their team informed. They believe that being honest and transparent with their team instills trust and demonstrates leadership. Except for confidential  company decisions, a good manager should always communicate with their team and be open to answering questions or addressing concerns
</p>
</div>
  <li id="student"><a href="customerlogin.php"></a></li><div style="text-align:justify;background-color:black;color:white;"><h1 class="leee anim-typewriter">STUDENT....</h1><p>In today's society, online courses are widely used in colleges providing easy access to course materials, classroom discussions, and feedback to instructors. The course materials and activities may be accessed from any computer, whether it is from the University or from the comfort of your own home. I've taken two online courses since I've been in college and have benefited from those classes. There are a few reasons to why I'm drawn to an online education course as opposed to taking courses in a traditional classroom setting. First of all, I have a full-time job, which limits my opportunities to attend classes scheduled during normal school hours. Also online classes allow me to work on my own and move at my own pace. Finally, these classes offer more of a one-on-one teacher-student relationship rather than a teacher having to spread their focus amongst thirty other students.

Having a full time job makes it very difficult to schedule your classes. The hours I have scheduled at my job conflict with the times that most classes are offered. The use of online courses has made life at work easier, since my manager refuses to work around school schedules. Since I don't have to meet on a regularly basis, I don't have to leave my job to meet on campus. It is very convenient for me not having to meet on a regular basis. When a person has to work full time, it is hard for that person to successfully juggle their job responsibilities along with homework and study. A person can always take an online course to deal with the time constraints that a job will put on you. The use of online courses allows you to cover the material needed in school while maintaining your workload.

I've learned that to be a successful distance learner, you have to be self-disciplined and able to work well on your own. Since you won't be physically going to class each week, you can take part in class from the comfort of your own home. You must be self-disciplined because the instructor won't constantly be there to remind you of assignments or of project deadlines. Other obligations may mean that you are not able to do the work as regularly as if you were physically attending class, it will be up to you to make sure that you are keeping up with all the work for the course. Also, one of the main objectives of college is to become a well-rounded individual, with the skills needed to successfully manage a busy agenda.

The first online course I took, I just thought that the work for the course could be put off until I had time to do the work. In doing this, I got very far behind. It took me awhile to catch back up with the assignments and I promised myself that I would never let that happen again. The students who procrastinate about their assignments, usually either wind up withdrawing from the course late in the semester because they have fallen far behind or receiving an "F" in the course because they have not completed the required class-work by the time the course is over. A student should leave time in their schedule in order to complete the online courses successfully. Although online classes are more convenient, than traditional college classes, they should be looked at as typical college classes and not taken lightly.

Being able to communicate with instructors and other students, that are taking these courses, has made me be a more active participant during the courses. With the two online courses I've taken, I have never felt it difficult to communicate with my instructor to ask for help or clarification of an assignment. All of these instructors and the students taking these classes have been very helpful to me. The online courses offer a discussion board to send posts to your fellow students. You get a chance to read and critique each other's work and respond to the comments of your classmates. I've learned that by discussing each other's ideas we are in turn challenging each other to examine our own thoughts and feelings. This makes class work more interesting as we get a chance to share personal experiences in the discussion while improving on our writing style.

Any student that is interested in taking an online course should do research on the class and speak with the instructor before enrolling. Personally, I would recommend online courses to anyone that has a busy schedule, such as having a full time job or having family responsibilities. Also, you are able to learn well by doing the required work on your own, without depending solely on interaction with other students as a means of learning. Online courses are a great alternative to the student who must hold a full-time job while enrolled in college. Online courses are not only convenient but they teach you how to become a more disciplined scholar.</p>
</div>
  <li id="staff"><a href="customerlogin.php"></a></li>
<div style="text-align:justify;background-color:black;color:white;"><h1 align="right" class="leen anim-typewriter">FACULTY....</h1><p>Teachers are one of the most important beings on Earth as they help mold the personality of students and guide them in the right direction for future life. In the teaching profession, the scenario is almost the same as any other reputed profession, with the presence of both good and bad people, but very few teachers in the world are claimed of wicked.

Teachers should always be very compassionate and understanding while dealing with young souls because their sour actions can have a profound impact on them. There are many ways of teaching that teachers can adapt to making the lesson more interesting. Teachers should make sure they are prepared and confident about the concept that they are about to teach in class. There are incidents where teachers have been enormous help than friends or even parents. Hence, we all should respect and love our teachers and always keep them in our memory.
The devotion of a teacher in the nation’s development is mention-worthy, as good teachers are essential assets. The presence of teachers has been from pre-historic society. In the beginning, when one of very good at something, they were requested by the other to teach them about it in exchange for something (Gurudakshina was given as per the wish of the teacher at the end of training or teaching).

Most teachers are willing to help anytime when someone needs it. A teacher can successfully arouse the curiosity about the concepts in their students and then can also successfully satisfy that hunger or thirst for knowledge. An ideal teacher should be efficient in teaching, sincere, disciplined, talented, polite, hardworking, dutiful, and honest.
Teachers help students overcome fear and discover each student’s potential, sometimes even before they can themselves know. Teachers are often called the guardian angels of the society, for they bear all qualities of a friend, guide, and philosopher. A teacher can feel immense pride and personal success in the success of their students. A good teacher can look beyond a student’s academic success and help them find a path to fulfill their purpose of life.
A teacher is a person with commendable skills for helping others learn, guiding, and helping solve a problem. Teachers should have excellent communication skills so that the students can understand everything and learn with ease. Teachers have several credentials as per their designation or where they are teaching.

Our parents also, to an extent, qualify as teachers, even though unprofessional, but they still work hard to guide us in our and pledge to help us from or even before when we are born. Teachers also grow with the experience they get while years of teaching in an institution. Teachers see many generations growing in front of them and, most times, become a significant factor in sculpting their personalities.


 
One might wonder how hard being a teacher might be, but let me tell you it is not an easy task. Being a teacher involved being proficient in their matter of teaching and also being very good with explaining the concepts with ease, other than this, a teacher will also have tremendous observing skills to understand the progress of each student and work on changes with the dynamic education system at present.

Other than this, being a teacher also means being able to test your students’ knowledge, and proficiency on the matter taught and later helping those who couldn’t understand clearly from the results of the evaluation. Hence, to better express the importance of teachers, in the Hindu religion, the ‘Guru’ is often given the same pedestal as that of God and parents. The contribution behind one’s success will always be a teacher.</p><br><br><br><br><br><br><br><br><br><br><br><br>
</ul>
   <div class="anim"style="padding-left:25px;margin-top:150px;">Developed by<br>III BCA-A</div>
  </div>
<div class="footer" style="background-color:black;height:200px;color:white;text-align:center"><center><u>By ThE TeAm WoRk</u></center><center>III BCA-A</center>LOGESHWAR|18suca035<br>MURUGAN|18suca043
</div></div>

</body>
</html>