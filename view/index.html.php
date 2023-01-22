<div class="container">
    <div class="row my-4">
        <div class="col-3"></div>
        <h1 class="col-6 text-center text-primary p-2">ToDoList</h1>
        <div class="col-3"></div>
    </div>    
    <div class="row">
        <div class="col-3"></div>
        <form action="index.php?page=insertion" method="post" class="col-6 p-2" id="general">
            <div class="mb-3">
                <label for="task" class="form-label">New task</label>
                <input type="text" class="form-control" id="task" name="task" required="">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" required="">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
        <div class=col-3></div>
    </div>
    <div class="row mt-5">
    <table class="table table-primary">
            <thead>
                <tr>
                    <th>Id_Liste</th>
                    <th>Task</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 1; 
            while ($liste = $donnee->fetch(PDO::FETCH_ASSOC)) : ?> 
            <tr>
                <td> <?php echo $i; ?>
                </td>
                <td> <?php echo $liste['Tache']; ?> </td>
                <td> <?php echo $liste['Categorie']; ?> </td>
                <td>
                <button type="submit" id="complete" class="col-8 mb-1">Complete</button>
                        <br>
                        <form action="index.php?page=delete" method="post">
                            <input type="hidden" name="Id_Liste" value= <?php echo $liste["Id_Liste"] ?> />
                            <button type="submit" id="delete" class="col-8">Delete</button>
                        </form>
                </td>
            </tr>
            <?php  $i++; ?>
            <?php  endwhile; ?>
            </tbody>
    </table>
    </div>
</div>