<div class="edit_form" style="width: 300px">
      <div class="edit_form_header">
        Change Spellset
               </div>
        <div class="edit_form_content">
        <form method="post" action="index.php?editor=spellset&z=<?=$currzone ?? ""?>&zoneid=<?=$currzoneid ?? ""?>&npcid=<?=$npcid?>&id=<?=$id?>&action=20">
              <table style="width: 100%;">
          <tr>
              <th><label for="npcname">npc name</label></th>
              <th><label for="updateall">update all</label></th>
           </tr>
           <tr>
               <td><input type="text" size="25" id="npcname" name="npcname" value=""></td>
               <td>
               <select id="updateall" name="updateall">
                   <option value="0"<?php echo (isset($updateall) && $updateall == 0) ? " selected" : ""?>>No</option>
                   <option value="1"<?php echo (isset($updateall) && $updateall == 1) ? " selected" : ""?>>Yes</option>
                 </select>
               </td>
             </tr>
                 </table><br><br>
               <div class="center">
                 <input type="submit">
               </div>
             </form>
         </div>
      </div>
  
