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
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "locat"));
        foreach ($context['_seq'] as $context["_key"] => $context["loca"]) {
            // line 19
            echo "
\t";
            // line 20
            if ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "d") >= twig_date_format_filter($this->env, "now", "d")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "m") == twig_date_format_filter($this->env, "now", "m"))) || (twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "m") > twig_date_format_filter($this->env, "now", "m")))) {
                // line 21
                echo "\t<table border=\"1\">
\t\t";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "query"));
                foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                    // line 23
                    echo "\t\t\t";
                    if (($this->getAttribute($this->getContext($context, "prod"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "loca"), "product"), "id"))) {
                        // line 24
                        echo "\t\t\t   
\t\t\t<td> <img src=\"/ef/web/";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "image"), "html", null, true);
                        echo "\"></img></td>
\t\t\t<td> <h5>Παζαρί με:";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prod"), "name"), "html", null, true);
                        echo "</h5>
\t\t\t";
                    }
                    // line 28
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 29
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "address"), "html", null, true);
                echo "
\t";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "date"), "d/m/Y"), "html", null, true);
                echo "

  <form  action=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy"), "html", null, true);
                echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "id"), "html", null, true);
                echo "\"/>
<button type=\"submit\">Αγορά</button>
</form>
<form  action=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell"), "html", null, true);
                echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loca"), "id"), "html", null, true);
                echo "\"/>
<button type=\"submit\">Πώληση</button>
</form>
\t</td>
\t</table>
\t";
            }
            // line 43
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loca'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
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
