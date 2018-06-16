<?php
$post_id = isset($_GET["post_id"]) ? $_GET["post_id"] : 0;
$lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"]) && isset($_SESSION["user_role"])  && $_SESSION["user_role"] == "admin")
{
    $post = loadBlogPostById($pdo,$post_id);

    $out = '<div class="container">
                <div class="card rounded">
                    <div class="card-content ">
                        <div class="content">
                            <form action="index.php?action=updateBlogPost&post_id='.$post['id'].'&la='.$lang.'" method="post">
                                <span class="is-size-3"> Edit a blog post </span>
                                <br/>
                                <br/>
                                <div class="field">
                                    <label class="label">Title</label>
                                    <div class="control">
                                        <input required class="input" type="text" name="title" placeholder="Post Title" value="'.$post['title'].'">
                                        <input class="input" type="hidden" name="post_id" value="'.$post_id.'">
                                    </div>
                                </div>
                            
                            
                            
                                <div class="field">
                                    <label class="label">Language</label>
                                    <div class="control">
                                        <div class="select">
                                        <select name="language">
                                            <option value="en" '.($post['lang'] == 'en' ? 'selected':'' ).'>English</option>
                                            <option value="de" '.($post['lang'] == 'de' ? 'selected':'' ).'>German</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="field">
                                <label class="label">Text</label>
                                    <div class="control">
                                        <textarea required name="text" class="textarea" placeholder="Textarea">'.$post['text'].'</textarea>
                                    </div>
                                </div>
                            
                            
                                <div class="field">
                                    <div class="control">
                                        <label class="radio">
                                        <input type="radio" name="published" value="yes" '.($post['published'] == true ? 'checked':'' ).'>
                                            Publish
                                        </label>
                                        <label class="radio">
                                        <input type="radio" name="published" value="no" '.($post['published'] == false ? 'checked':'' ).'>
                                            Draft
                                        </label>
                                    </div>
                                </div>
                            
                                <div class="field">
                                <label class="label">Publish at</label>
                                    <div class="control">
                                        <input required id="published_at" class="input" type="datetime-local" name="published_at" >   
                                    
                                    </div>
                                </div>
                            
                                <br/>
                                <br/>
                            
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-info">Save</button>
                                    </div>
                                    <div class="control">
                                        <a class="button is-white" href="index.php?page=blog&la='.$lang.'">
                                            <span>
                                                Cancel
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <script>
                                    // we get date from published_at that is formated as "Y-m-d H:i:s" and then convert to to ISO format yyyy-MM-ddTHH:mm:ss.SSSZ
                                    var date = new Date("'.$post['published_at'].'")
                                    isoDate = new Date(date.getTime() - (date.getTimezoneOffset() * 60000)).toISOString();

                                    // here i slice that last Z from the string
                                    date = isoDate.slice(0,isoDate.length-1);
                                    document.getElementById("published_at").value = date;
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
       
} else  {
    // Error msg
    $out = '  <div class="container has-text-centered ">
        <div class="column is-6-desktop is-offset-3-desktop">
            <div class="card rounded">
                <div class="card-content has-text-centered notification is-danger">
                    <span class="box-title is-size-4"><b></b></span>
                    <div class="content">
                        <div class="field">
                            <p class="is-size-5">Oh oh!! Permission denied ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

echo $out;