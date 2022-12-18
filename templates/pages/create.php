
<div>
        <div>            
                <h3> Nowa Notatka </h3>            
        </div>
        <div>

        
    
                <?php if ($params ['created']): ?>
                <div>
                        
                        <div><?php if (!($_POST['title'] == null) or !($_POST['description'] == null)): ?>
                        Tytuł: <?php echo $_POST['title']; ?><br/>
                        Treść: <?php echo $_POST['description']; ?><br/>
                        <?php else: ?>

                                podaj tytuł lub tresc
                                <?php endif; ?> 
                        </div>
                </div>
                <?php else: ?>

                <form action="/?action=create" method="post">
                        <ul>
                                <li>
                                        <label> Tytuł<span>*</span></label>
                                        <input type="text" name ="title">
                                </li>
                                <li>
                                        <label>Treść Notatki:</label>
                                        <textarea name="description"></textarea>
                                </li>
                                <li>
                                        <input type="submit" value="Submit" />
                                </li>
                        </ul>
                </form>   
                <?php endif; ?> 
        </div>
</div>