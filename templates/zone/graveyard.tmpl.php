<div class="table_container" style="width: 500px;">
    <div class="table_header">
        <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
            <tr>
                <td style="padding: 0;">Graveyard for <a
                            href="index.php?editor=zone&z=<?= $gravezone ?? "" ?>&zoneid=<?= getZoneIDByName($gravezone ?? "") ?>&action=1"><?= $gravezone ?? "" ?></a>
                </td>
                <td style="padding: 0; text-align: right;">
                    <a href="index.php?editor=zone&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&graveyard_id=<?= $id ?>&action=5"><img
                                src="images/edit2.gif" style="border: 0;" alt="Edit Icon" title="Edit Graveyard"></a>
                    <a onClick="return confirm('Really Delete Graveyard <?= $v['id'] ?? "Error: Undefined" ?>?');"
                       href="index.php?editor=zone&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&graveyard_id=<?= $id ?>&action=7"><img
                                src="images/remove3.gif" style="border: 0;" alt="Remove Icon"
                                title="Delete this Graveyard"></a>
                </td>
            </tr>
        </table>
    </div>

    <table class="table_content2" style="width: 100%;">
        <tr>
            <td style="text-align: center; width: 5%"><strong>ID</strong></td>
            <td style="text-align: center; width: 12%"><strong>Zone</strong></td>
            <td style="text-align: center; width: 8%"><strong>X</strong></td>
            <td style="text-align: center; width: 8%"><strong>Y</strong></td>
            <td style="text-align: center; width: 10%"><strong>Z</strong></td>
            <td style="text-align: center; width: 8%"><strong>Heading</strong></td>
            <th style="width: 5%;"></th>
        </tr>
        <tr style="background-color: #<?php echo ($x % 2 == 0) ? "BBBBBB" : "AAAAAA"; ?>">
            <td style="text-align: center; width: 5%"><?= $id ?></td>
            <td style="text-align: center; width: 12%"><?= getZoneName($zone_id ?? "") ?></td>
            <td style="text-align: center; width: 8%"><?= $x ?></td>
            <td style="text-align: center; width: 8%"><?= $y ?? "" ?></td>
            <td style="text-align: center; width: 8%"><?= $z ?></td>
            <td style="text-align: center; width: 8%"><?= $heading ?? "" ?></td>
            <td style="text-align: right;">
            </td>
        </tr>
    </table>
