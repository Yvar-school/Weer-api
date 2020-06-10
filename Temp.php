<!DOCTYPE html>
<html>
<?php 
        include "layout.php";
        include "links.php";
    ?>

<body>
    <div id="content">
        <h1>Mijn Weer</h1>
        <label for="pnaam">Voer hier uw Plaatsnaam of GPS coordinaten</label> <br>
        <input type="text" id="pnaam" name="pnaam" value="" placeholder="bijv. Amsterdam of 52,3" required><br>
        <button onclick='requestData();' type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#exampleModal">Submit</button>

        <div id="">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="Resultaten">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>