<html>
    <head>
        <link rel="stylesheet" href="style1.css" type="text/css">    
    </head>
    <body>
        <form action='team_assignment.php' method='POST'>
            <label>Name: 
                <input type='text' name='name'/>
            </label>
            <label>Email: 
                <input type='text' name='email'/>
            </label>
            <label>Major: 
                <label>Computer Science <input type='radio'name='major' value='Computer Science'></label>
                <label>Web Design <input type='radio'name='major' value='Web Design  Development'></label>
                <label>Computer Engineering <input type='radio'name='major' value='Computer Engineering'></label>
                <label>Computer Information Systems <input type='radio'name='major' value='Computer Information Technology'></label>
            </label>
            <label>Comments: 
                <textarea name='comments'></textarea>
            </label> Continents I've Visited:
            <label> North America 
                <input type='checkbox' name='continent[]' value='North America'/>
            </label>
            <label> South America
                <input type='checkbox' name='continent[]' value='South America'/>
            </label>
            <label> Europe
                <input type='checkbox' name='continent[]' value='Europe'/>
            </label>            
            <label> Asia
                    <input type='checkbox' name='continent[]' value='Asia'/>
            </label>
            <label> Africa
                <input type='checkbox' name='continent[]' value='Africa'/>
            </label>
            <label> Antaritica
                <input type='checkbox' name='continent[]' value='Antartica'/>
            </label>
            <label> Australia
                <input type='checkbox' name='continent[]' value='Australia'/>
            </label>
            <input type='submit'/>
        </form>

        <?php
            if(empty($_POST)){
                
            }else{
                ?>
                <p>Your name is <?= $_POST['name']?></p>
                <p>Your email is <a href=mailto:"<?= $_POST['email']?>"> <?= $_POST['email']?></a></p>
                <p>Your major is <?= $_POST['major']?> </p>
                <p>Your comments are <?= $_POST['comments']?> </p>
                <p>continents <?= implode(', ', $_POST['continent']) ?> </p>
        <?php    
            }
        ?>
    </body>
</html>
