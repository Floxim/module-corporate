<div fx:template="logo" fx:of="list#2" fx:name="Логотип" fx:b="logo">
    {css}logo.less{/css}
    {each select="$items as $item"}
        {apply floxim.ui.box:box /}
    {/each}
</div>