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
        // line 1
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("AcmeUserBundle:Form:fields.html.twig", ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
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
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "locat"));
        foreach ($context['_seq'] as $context["_key"] => $context["loca"]) {
            // line 20
            echo "
\t";
            // line 21
            if ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "d") >= twig_date_format_filter($this->env, "now", "d")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "m") == twig_date_format_filter($this->env, "now", "m"))) || (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "m") > twig_date_format_filter($this->env, "now", "m")))) {
                // line 22
                echo "\t<table border=\"1\">
\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "query"));
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 24
                    echo "\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "prod"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "loca"), "product"), "id"))) {
                        // line 25
                        echo "\t\t\t   
\t\t\t<td> <img src=\"/ef/web/";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "image"), "html", null, true);
                        echo "\"></img></td>
\t\t\t<td> <h5>Παζαρί με:";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "name"), "html", null, true);
                        echo "</h5>
\t\t\t";
                    }
                    // line 29
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "address"), "html", null, true);
                echo "
\t";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "d/m/Y"), "html", null, true);
                echo "

  <form  action=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy"), "html", null, true);
                echo "\" method=\"post\" ";
                echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
                echo " class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "id"), "html", null, true);
                echo "\"/>
<button type=\"submit\">Αγορά</button>
</form>
<form  action=\"sell\" method=\"get\"> 
<input type=\"hidden\" name=\"id\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "id"), "html", null, true);
                echo "\"/>
<button type=\"button\">Πώληση</button>
</form>
\t</td>
\t</table>
\t";
            }
            // line 44
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loca'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "</form>
<br>
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
