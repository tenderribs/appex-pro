<div class="container">
    <form action="index.php?action=storeBlogPost" method="post">
        <span class="is-size-3"> Creating a blog post </span>
        <br/>
        <br/>
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Post Title">
            </div>
        </div>



        <div class="field">
            <label class="label">Language</label>
            <div class="control">
                <div class="select">
                <select name="language">
                    <option value="en">English</option>
                    <option value="de">German</option>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
        <label class="label">Text</label>
        <div class="control">
            <textarea name="text" class="textarea" placeholder="Textarea"></textarea>
        </div>
        </div>


        <div class="field">
        <div class="control">
            <label class="radio">
            <input type="radio" name="published" value="yes">
                Publish
            </label>
            <label class="radio">
            <input type="radio" name="published" value="no">
                Draft
            </label>
        </div>
        </div>

        <div class="field">
        <label class="label">Publish at</label>
        <div class="control">
            <input class="input" type="datetime-local" name="published_at">   
        </div>
        </div>

        <br/>
        <br/>
        
        <div class="field is-grouped">
        <div class="control">
            <button class="button is-info">Submit</button>
        </div>
        <div class="control">
            <a class="button is-white"  href="index.php?page=manage">
                <span>
                    Cancel
                </span>
            </a>
        </div>
        </div>
    </form>
</div>