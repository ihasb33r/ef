<?php

/* AcmeUserBundle:Default:pazari.html.twig */
class __TwigTemplate_45cc9f47b8e30f76f64ce59420807c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEPM5KnBooryeD7ln46Sa85Y7w9IencE0&sensor=false\"></script>
<script type=\"text/javascript\">
function addmap(id,lat, lng) {
\tvar latlng = new google.maps.LatLng(lat, lng);
\tdirectionsService = new google.maps.DirectionsService();
\tdirectionsDisplay = new google.maps.DirectionsRenderer();
\tvar myOptions = {
\t\tzoom: 14,
\t\tcenter: latlng,
\t\tmapTypeId: google.maps.MapTypeId.ROADMAP,
\t\tmapTypeControl: false
\t};
\tvar map = new google.maps.Map(document.getElementById(id),myOptions);
\tvar marker = new google.maps.Marker({
\t\tposition: latlng, 
\t\tmap: map 
\t}); 
}
</script>

<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\"><div class=\"nine columns offset-by-one\">
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "locat"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            echo "\t
<table >
\t";
            // line 33
            if ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d") >= twig_date_format_filter($this->env, "now", "d")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "m") == twig_date_format_filter($this->env, "now", "m"))) || (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "m") > twig_date_format_filter($this->env, "now", "m")))) {
                // line 34
                echo "\t\t\t<div class=\"row\">
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "query"));
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 36
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "prod"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                        // line 37
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr><h5>Παζαρί με: ";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "name"), "html", null, true);
                        echo "</h5></tr>
\t\t\t\t\t\t<tr><td><h6>Διεύθυνση:";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "address"), "html", null, true);
                        echo "</h6></td>
\t\t\t\t\t    \t<td><h6>Ημέρα συνάντησης:";
                        // line 40
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d/m/Y"), "html", null, true);
                        echo "</h6></td></tr>
\t\t\t\t\t\t\t<tr><td>\t<img style=\"width:80%; height:150px;\" src=\"/ef/web/";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "image"), "html", null, true);
                        echo "\"></img></td>
\t\t\t\t\t";
                    }
                    // line 43
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 44
                echo "\t\t\t<td><div class=\"span4\" id=\"#map";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
                echo "\" style=\"width:90%; height:150px;\"></div></td></tr>
\t";
            }
            // line 46
            echo "
\t\t<script>\t
\t\t\taddmap(\"#map";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
            echo "\", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "latitude"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "longitude"), "html", null, true);
            echo ");
\t\t</script>
\t\t\t<tr><td><form  action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy"), "html", null, true);
            echo "\" method=\"post\"  class=\"nice\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
            echo "\"/>
\t\t\t<button type=\"submit\">Αγορά</button>
\t\t\t</form></td>
\t\t\t<td><form  action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell"), "html", null, true);
            echo "\" method=\"post\"  class=\"nice\">
\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
            echo "\"/>
\t\t\t<button type=\"submit\">Πώληση</button>
\t\t\t</form></td></tr>
</table></br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "</div>
</div>
";
    }

    // line 65
    public function block_sidebar($context, array $blocks = array())
    {
        // line 66
        echo "<div class=\"three colums nava\">
\t<div class=\"art-vmenublock\">
\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublock-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"art-vmenu\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pazari\" class=\"active\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αρχική</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Προφίλ</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"price\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Τιμοκατάλογος</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"logout\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αποσύνδεση</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:pazari.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
