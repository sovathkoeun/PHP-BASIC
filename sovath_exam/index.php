<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Midterm Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
    <style>
        label{
            font-weight: bold;
        }
        div.card-header{
            font-weight: bold;
        }
    </style> 
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card bg-light shadow-lg">
                    <div class="card-header text-center">Information Form</div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <!-- input username -->
                            <div class="form-group">
                                <label for="name">Username: </label>
                                <input type="text" name="username" id="name" class="form-control" placeholder="Username" require>
                            </div>
                            <!-- input email -->
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" require>
                            </div>
                            <!-- Select province -->
                            <div class="form-group">
                                <label for="province">Province: </label>
                                <select name="province" id="province" class="form-control" require>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                    <option value="Kampong Speu">Kampong Speu</option>
                                    <option value="Kampong Thom">Kampong Thom</option>
                                    <option value="Kampot">Kampot</option>
                                    <option value="Kandal">Kandal</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Kratie">Kratie</option>
                                    <option value="Mondokiri">Mondokiri</option>
                                    <option value="Oddar Meanchey Province">Oddar Meanchey Province</option>
                                    <option value="Pailin">Pailin</option>
                                    <option value="Sihanoukville">Sihanoukville</option>
                                    <option value="Preah Vihear">Preah Vihear</option>
                                    <option value="Pursat">Pursat</option>
                                    <option value="Prey Veng">Prey Veng</option>
                                    <option value="Ratanakiri">Ratanakiri</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Stung Treng">Stung Treng</option>
                                    <option value="Svay Rieng">Svay Rieng</option>
                                    <option value="Takeo">Takeo</option>
                                    <option value="Tbong Khmum">Tbong Khmum</option>
                                </select>
                            </div>
                            <!-- input phone number -->
                            <div class="form-group">
                                <label for="number">Phone Number: </label>
                                <input type="text" name="phone" id="number" class="form-control" placeholder="Phone Number" require>
                            </div>
                            <!-- input gender -->
                            <div class="form-group">
                                <label for="gender">Gender: </label><br>
                                <input type="radio" name="gender" id="gender"  value="Male" checked>Male
                                <input type="radio" name="gender"  value="Female" >Female
                            </div>
                            <!-- input Status -->
                            <div class="form-group">
                                <label for="status">Status: </label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Single">Single</option>
                                    <option value="Engaged">Engaged</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <!-- input Interest -->
                            <div class="form-group">
                                <label for="#">Interest: </label><br>
                                <input type="checkbox" name="interest[]" value="Reading" checked>Reading <br>
                                <input type="checkbox" name="interest[]" value="Listening To Music">Listening To Music <br>
                                <input type="checkbox" name="interest[]" value="Watching Movie">Watching Movie <br>
                                <input type="checkbox" name="interest[]" value="Dancing">Dancing <br>
                            </div>
                            <!-- Describe about who you are -->
                            <div class="form-group">
                                <label for="shortBio">Short Description About Yourself: </label>
                                <textarea name="shortBio" id="shortBio" class="form-control" cols="30" rows="5" require></textarea>
                            </div>
                            <!-- button submit and reset -->
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="btn-submit">Submit Infomation</button>
                                <button class="btn btn-warning float-right" type="reset" name="clear">Cancel Infomation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>