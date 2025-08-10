<?php include "inc/header.php";?>
<?php
$pdo = require "config/db_conn.php";
$users =[];

try {
  $sql = 'SELECT * FROM users';
   $statement = $pdo->query($sql);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

}catch (Exception $e){
    echo $e->getMessage();
}
?>
<div class=" w-full max-w-[500px] mx-auto py-10">
    <a href="form.php" class="flex items-center gap-4 px-8 py-1 bg-teal-600 text-white rounded-lg w-fit">Create Contact <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg></span></a>
</div>
<div class="py-10 w-full max-w-[800px] mx-auto">
    <h3 class="text-lg font-bold text-teal-500 mb-8">Current Registered Users</h3>
    <div>
        <ul>
            <?php if(!empty($users)):?>
              <?php foreach ($users as $user): ?>
                <li class="flex items-center gap-5 mb-8 border border-gray-200 rounded-lg p-4">
                    <span class="flex  items-center gap-2">Email: <?php echo $user["name"]?></span>
                   <span class="flex  items-center gap-2">Email: <?php echo $user["email"]?></span>
                    <span class="flex items-center  gap-2">Country: <?php echo $user["country"]?></span>
                    <a href="update.php?u_id=<?php echo $user["id"];?>" class="px-8 py-1 bg-teal-600 text-white rounded-lg">Update</a>
                </li>
              <?php endforeach;?>

            <?php else:?>
             <p>No user registered yet, go ahead be the first!</p>
            <?php endif;?>
        </ul>
    </div>
</div>
<?php include "inc/footer.php";?>