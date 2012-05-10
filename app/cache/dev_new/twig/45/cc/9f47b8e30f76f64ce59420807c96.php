<?php

/* AcmeUserBundle:Default:pazari.html.twig */
class __TwigTemplate_45cc9f47b8e30f76f64ce59420807c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAEPM5KnBooryeD7ln46Sa85Y7w9IencE0&sensor=false\"></script>
<script type=\"text/javascript\">
function addmap(id,lat, lng) {
\tvar latlng = new google.maps.LatLng(37.949459, 23.657866);
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
        <img style=\"position:relative;top:10px;\" src=\"/images/backgroundarticle.png\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">
<h3> Συναντήσεις </h3>
</div>
</div>
<div class=\"row article\">
    <div class=\"six columns offset-by-one form\">


";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "locat"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 39
            echo "
\t
\t";
            // line 41
            if ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d") >= twig_date_format_filter($this->env, "now", "d")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "m") == twig_date_format_filter($this->env, "now", "m"))) || (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "m") > twig_date_format_filter($this->env, "now", "m")))) {
                // line 42
                echo "\t<script>\t
\taddmap(\"#map";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
                echo "\", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "latitude"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "longitude"), "html", null, true);
                echo ");
\t</script>
<div class=\"row\">

\t
\t\t";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "query"));
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 49
                    echo "\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "prod"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                        // line 50
                        echo "<div class=\"span4>
\t\t\t   
\t\t\t<img src=\"/ef/web/";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "image"), "html", null, true);
                        echo "\"></img>
</div>
\t\t\t<div class=\"span4\"><h5>Παζαρί με:";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "name"), "html", null, true);
                        echo "</h5>
\t\t\t";
                    }
                    // line 56
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 57
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "address"), "html", null, true);
                echo "
\t";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "date"), "d/m/Y"), "html", null, true);
                echo "

  <form  action=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy"), "html", null, true);
                echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
                echo "\"/>
<button type=\"submit\">Αγορά</button>
</form>
<form  action=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell"), "html", null, true);
                echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
                echo "\"/>
<button type=\"submit\">Πώληση</button>
</form>
</div>
<div class=\"span4\" id=\"#map";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "id"), "html", null, true);
                echo "\" style=\"width:100%; height:200px;\">
</div>
\t";
            }
            // line 72
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "<br>
</div>
</div>
";
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
