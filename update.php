<?php
$pdo = include "config/db_conn.php";
?>
<?php
$contact=[];
try {
   $id = (int)$_GET['u_id'];
    $sql = "SELECT * FROM users WHERE id = :id";

    $statement = $pdo->prepare($sql);
     $statement->bindParam(":id",$id, PDO::PARAM_INT);
     $statement->execute();

//     fetch data
    $contact = $statement->fetch(PDO::FETCH_ASSOC);
    if(!$contact){
        die("No record found.");
    }
}catch (Exception $e){
    echo $e->getMessage();
}

?>

<div class="w-full max-w-[500px] mx-auto ">
    <h3>Update the record</h3>
    <div>
        <form action="update_action.php" enctype="multipart/form-data" method="post" class="w-[300px]">
            <div class="flex flex-col gap-2 py-1">
                <label for="name">Username</label>
                <label class="w-full">
                    <input type="text" name="name" value="<?= htmlspecialchars($contact['name']) ?>" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div>
            <div class="flex flex-col gap-2 py-1">
                <label for="email">Email</label>
                <label class="w-full">
                    <input type="email" name="email" value="<?= htmlspecialchars($contact['email']) ?>" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div> <div class="flex flex-col gap-2 py-1">
                <label for="country">Country</label>
                <label class="w-full">
                    <input type="text" name="country" value="<?= htmlspecialchars($contact['country']) ?>" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div>
            <div class="flex flex-col gap-2 py-1">
                <button class="w-full bg-teal-500 text-white font-bold py-2.5 cursor-pointer">Send</button>
            </div>

        </form>
    </div>
</div>
