<html>
    <head>
        <title>Supermarché</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
    </head>
    <body>
        <h1>Liste des secteurs</h1>  
        <select name="lesSecteurs">
            <?php
                foreach($lesSecteurs as $sec){
            
                echo"<option value='".$sec->numS."'>".$sec->nomS;
                echo "<br>"
                
            ?>
            <?php
                }
            ?>
            
        </select>
        <h1>Liste des rayons</h1>
        <select name="lesRayons">
            <?php
                foreach($lesRayons as $ray){
                    echo"<option value='".$ray->numR."'>'".$ray->nomR;
                }
            ?>
        </select>
        <table>
            <tr>
                <th>Liste des employés</th>
                <th>Nombre d'heures totales</th>
            </tr>
            <?php
                foreach($lesEmployes as $emp){
            ?>
            <tr>
                        <td><?php echo $emp->numE;?></td>
                        <td><?php echo $emp->prenomE;?></td>
                        
            </tr>
                <?php } ?>
        </table>
        <h1>Ajouter un nouveau temps</h1>
        <select name="lesEmployes">
            <?php
            foreach($lesEmployes as $emp){
                echo"<option value='".$emp->nomE."'>'";
            ?>
            <?php } ?>
        </select>
        <input type="datetime">
        <input type="text">
        <input type="submit" value="Valider">
    </body>
</html>
