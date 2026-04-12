<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<body>

<h2>Fest Rules</h2>

<ul>
<xsl:for-each select="rules/rule">
    <li>
        <b><xsl:value-of select="title"/></b><br/>
        <xsl:value-of select="description"/>
    </li>
    <br/>
</xsl:for-each>
</ul>

</body>
</html>

</xsl:template>
</xsl:stylesheet>