



<div class="main-container ">
<div class="items">
    
        <form action="?c=clubs&a=createNewClub" method="post" name="newClub" class="form" enctype="multipart/form-data">
        <h2>entrez les informations pour creer un nouveu club :</h2>    
        <div class="line">
            <label for="nom">Nom du club:</label>
            <input type="text" name="nom">
            </div>
            <div class="line">
            <label for="description">description :</label>
            <!-- <input type="text" name="description"> -->
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="line">
            <label for="datecreation">date de creation :</label>
            <input type="date" name="datecreation">
            </div>


            <div class="line">
            <input class="upload" type="file" id="myFile" name="logo">
            </div>
            <button class="modifier" type="submit">submit</button>
        </form>
    </div>
    </div>
