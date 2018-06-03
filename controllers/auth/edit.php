<div class="card rounded">
    <div class="card-content has-text-centered">
        <span class="box-title">
            <p style="font-size: 150%;">Add or remove Blogposts</p>
            </br>
        </span>
        <div class="content">
            <form action="controllers/auth/auth.php?method=new" method="post">
                <br>                
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input is-info" type="text" name="title" placeholder="Enter the title please">    
                        <span class="icon is-small is-left">
                                <i class="fas fa-align-left"></i>
                        </span>
                    </p>
                </div>
                <div class="field" rows="10">
                    <p class="control has-icons-left">
                        <textarea class="textarea is-info" type="text" name="text" rows="10" placeholder="Enter the main text of the post"></textarea>                        
                    </p>
                </div>
                <div class="field">
                    <p class="control ">
                        <a class="button is-success" <a class="button" style="background-color: #30a5ff" href="controllers/auth/auth.php?method=new" type="submit">
                            <span class="icon is-small">
                                <i class="fa fa-plus"></i>                       
                            </span>
                        </a>
                    </p>
                </div>                
            </form>
        </div>
    </div>
</div>