<head>
<script type="text/javascript">
function addLink(obj)
{
        newLink = self.opener.document.createElement("a");
        newLink.href = obj.id;
        newLink.innerHTML = obj.innerHTML;

        self.opener.document.getElementById("dLinks").appendChild(newLink);
        window.close();
}
</script>
</head>

<body>
    <div align="center">
    <table>
        <tr>
            <td>
                <a href="javascript://" onclick="addLink(this);">
                    <img src="images/game/monsters/1.jpg" width="50" height="50">
                    <input type="hidden" name="attack_1" id="attack_1" value="5">
                    <input type="hidden" name="defense_1" id="defense_1" value="1">
                </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink(this);">
                    <img src="images/game/monsters/2.jpg" width="50" height="50">
                    <input type="hidden" name="attack_1" id="attack_2" value="5">
                    <input type="hidden" name="defense_1" id="defense_2" value="1"> 
               </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink(this);"><img src="images/game/monsters/3.gif" width="50" height="50">
                    <input type="hidden" name="attack_1" id="attack_3" value="1">
                    <input type="hidden" name="defense_1" id="defense_3" value="1">                 
                </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink(this);"><img src="images/game/monsters/4.jpg" width="50" height="50">
                    <input type="hidden" name="attack_1" id="attack_4" value="1">
                    <input type="hidden" name="defense_1" id="defense_4" value="1">                     
                </a>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>