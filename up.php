<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="image">Select Image:</label>
    <input type="file" name="image" id="image">
    
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    
    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>
    
    <input type="submit" value="Upload">
</form>