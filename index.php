<?php include("header.html");
    
    if (isset($_POST['submit'])) {
        header('Location: aboutme.html');
    }
?>

<div class="container">
    <h1>HI, MY NAME IS MINH DUONG</h1>
    <p>I am an energetic and passionate college student working toward a B.S. in Software Engineering</p>
</div>

<div class="parallex-window" data-parallax="scroll" data-image-src="nightsky.png"></div>

<div class="aboutMe">
    <h2>About Me</h2>
    
    <img class="avatar" src="avatar.png" style="width:320px;height:350px;border:0;">
    
    <p>I am currently a Junior at
        <a href="https://www.utdallas.edu/">The University of Texas at Dallas</a> with a major of Software Engineering. I am expected to graduate with my Bachelor degree in May 2020.
    </p>
    
    <p>Beside schoolwork, I am a member of <a href="http://www.vincefutd.org/">UTD VINCEF</a> - Vietnamese student organization, as well as <a href="https://utdwwc.org/">WWC</a> - Women Who Compute. I also participate in some weekly contests of <a href="https://cs.utdallas.edu/codeburners-16yr-club/">Codeburners.</a>
    </p>
    
    <p>In my freetime, I enjoy reading, learning new stuff and listening to music.</p>
</div>

<div class="parallex-window" data-parallax="scroll" data-image-src="nightsky.png"></div>

<div class="skills">
    <h2>My Skills</h2>
    
    <table align="center">
        <col width="250px">
        <col width="450px">
        
        <tr>
            <td style="font-weight: bold">Programming Language</td>
            <td>Java, C, C++, UML</td>
        </tr>

        <tr>
            <td style="font-weight: bold">Databases</td>
            <td>MySQL, SQLite</td>
        </tr>

        <tr>
            <td style="font-weight: bold">Web Development</td>
            <td>HTML, CSS, JavaScript, PHP, AJAX, jQuery</td>
        </tr>

        <tr>
            <td style="font-weight: bold">Web Services</td>
            <td>Apache, WordPress</td>
        </tr>

        <tr>
            <td style="font-weight: bold">Software</td>
            <td>GitHub, Photoshop, Dreamweaver, Eclipse, NetBeans, Xcode</td>
        </tr>

        <tr>
            <td style="font-weight: bold">Operating Systems</td>
            <td>MacOS, iOS, Window, Android, UNIX/ Linux</td>
        </tr>
    </table>
    
</div>

<div class="parallex-window" data-parallax="scroll" data-image-src="nightsky.png"></div>

<div class="projects">
    <h2>My Projects</h2>
    <p style="text-align: center">Here is some of the projects I have done</p>
    <ul>
        <li>
            <a href="https://github.com/ReynaDuong/ReversiGame"><span style="font-weight: bold">Reversi Game(Java)</span></a>
            <p>This project resembles a simple version of Reversi game that have options for user to play with computer or with another player. The game goal is to score as much as possible by taking turn putting disks to the appropriate positions on the board. The game end if there are no more moves to be made.
            </p>
        </li>
        
        <li>
            <a href="https://github.com/ReynaDuong/ConcurrentThread"><span style="font-weight: bold">Chat Room(C, SQLite)</span></a>
            <p>This is a project for UNIX class, running on UNIX server. The project is a resemble of a chat room that allows Client to connect to Server to send and receive messages. The Client can also send request for data in a database and the Server will query the database and send back the information</p>
            <p>At most 8 clients can connect and extract data from the server at the same time.</p>
        </li>
        
        <li>
            <span style="font-weight: bold">Secret Diary (HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, MySQL)</span>
            <p>This project is a website that allow users to record their every day’s thoughts by logging them into their accounts and automatically record their input into a database using MySQL. Users can keep logging in by the use of cache.</p>
        </li>
    </ul>
    
</div>

<div class="parallex-window" data-parallax="scroll" data-image-src="nightsky.png"></div>

<div class="contact">
    <h2>Get in Touch</h2>
    <p>Are you looking for a passionate developer with high ethical standards and a broad skill set? Or maybe you just want to get in touch? If so, please do not hesitate to send me an email (for business inquires) or connect with me via Social Media.</p>
    
    <a href="https://www.linkedin.com/in/minh-duong-654a23140/">
        <img src="linkedin_circle_black-512.png" style="width:42px;height:42px;border:0;margin: 10px;">
    </a>

    <a href="https://github.com/ReynaDuong">
        <img src="github-icon.png" style="width:42px;height:42px;border:0;margin: 10px;">
    </a>
    
    <a href="mailto:minhduong.md511@gmail.com">
        <img src="Mail-2-512.png" style="width:42px;height:42px;border:0;margin: 10px;">
    </a>
    
</div>
