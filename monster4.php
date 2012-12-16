<head>
<script type="text/javascript">
function addLink4(obj)
{
        newLink = self.opener.document.createElement("a");
        newLink.href = obj.id;
        newLink.innerHTML = obj.innerHTML;

        self.opener.document.getElementById("dLinks4").appendChild(newLink);
        window.close();
}
</script>
</head>

<body>
    <div align="center">
    <table>
        <tr>
            <td>
                <a href="javascript://" onclick="addLink4(this);">
                    <img src="images/game/monsters/1.jpg" width="50" height="50">
                </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink4(this);">
                    <img src="images/game/monsters/2.jpg" width="50" height="50">
               </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink4(this);"><img src="images/game/monsters/3.gif" width="50" height="50">          
                </a>
            </td>
            <td>
                <a href="javascript://" onclick="addLink4(this);"><img src="images/game/monsters/4.jpg" width="50" height="50">
                </a>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>