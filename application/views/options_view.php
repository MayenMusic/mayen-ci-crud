<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>CI_CRUDMODULE - MAYEN</title>
    
    <style type="text/css">
        body
        {
            background-color:#e2e2e2;
            font-family:"century";
        }
        
        table
        {
            text-align:center;
        }
        
        a
        {
            text-decoration:none;
        }
        
        .crud-addview
        {
            float:right;
            border:1px black solid;
            background-color:white;
            padding:15px;
            border-radius:10px;
        }
        
        .crud-updateview
        {
            float:right;
            border:1px black solid;
            background-color:white;
            padding:15px;
            border-radius:10px;
        }
        
        .crud-readview
        {
            padding-left:50px;
            padding-top:20px;
            padding-bottom:40px;
            width:50%;
            border:1px black solid;
            height:auto;
            background-color:white;
            border-radius:10px;
        }
        
    </style>
    
</head>
    
<body>
    <!-- V-IEW -->
    
    <h2>Wiwooo! MAYEN CRUD Sample</h2>
    <hr size="5" color="black"><br>
    
    <!-- U.pdate -->
    <div class="crud-updateview">
        <h2>Update Record</h2>
        <?php echo form_open('site/update');?>
        
        <table width="20%">
            <tr>
                <td><label for="id">Book #: </label></td>
                <td><input type="text" name="id" id="id"/></td>
            </tr>
            
            <tr>
                <td><label for="title">Book Title: </label></td>
                <td><input type="text" name="title" id="title" /></td>
            </tr>
            
            <tr>
                <td><label for="description">Description: </label></td>
                <td><input type="text" name="description" id="description" /></td>
            </tr>
            
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Update" /></td>
            </tr>
        </table>
        
        <?php echo form_close(); ?>
    </div>
    
    <!-- C.reate -->
    <div class="crud-addview">
        <h2>Add Record</h2>
        <?php echo form_open('site/create');?>
        
        <table width="20%">
            <tr>
                <td><label for="title">Book Title: </label></td>
                <td><input type="text" name="title" id="title" /></td>
            </tr>
            
            <tr>
                <td><label for="description">Description: </label></td>
                <td><input type="text" name="description" id="description" /></td>
            </tr>
            
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" /></td>
            </tr>
        </table>
        
        <?php echo form_close(); ?>
    </div>
    
    <!-- R.ead -->
    <div class="crud-readview">
        <h2>Database Book Records</h2>
        
        <table border="1" width="90%">
            
            <th>Book #</th>
            <th>Book Title</th>
            <th>Description</th>
            <th>Action</th>
            
            <?php if(isset($records)) : foreach ($records as $row) :  ?>
            
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->title; ?></td>
                    <td><?php echo $row->description; ?></td>
                    
                    <!-- D.elete -->
                    <td><?php echo anchor("site/delete/$row->id", "DELETE"); ?></td>
                </tr>
            
            <?php endforeach; ?>
            
            <?php else : ?>
                <p>There are no records<p>
        
            <?php endif;?>
        </table>
    </div>
    
</body>
</html>