<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Add New</div>
                <div class="card-body">
                    <form action="add_proccess.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Province</label>
                            <input type="text" name="province" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                            <a href="index.php">
                            <button class="btn btn-primary" type="button">
                                <i class="material-icons float-left text-white">arrow_back</i>
                                <span>Back</span>  
                            </button>
                             </a>
                        <button class="btn btn-success float-right" type="submit" name="add">Add New</button>
                    </form>
                </div>
            </div>
            <?php 
               // Your PHP code here...     
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>