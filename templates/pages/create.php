
<div>
        <div>            
                <h3> Nowa Notatka </h3>            
        </div>
        <div>
                <?php dump($params); ?>
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
        </div>
</div>