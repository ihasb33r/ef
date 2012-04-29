<?php

/* AcmeUserBundle:Map:infoWindow.html.twig */
class __TwigTemplate_437517c2e58ddff0fef210ba59e246ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
    }

    // line 1
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('vich_geographical')->includeJavascripts();
        echo "
";
        // line 3
        echo $this->env->getExtension('vich_geographical')->includeStylesheets();
        echo "
<div class=\"fos_user_pazari\">
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 6
            echo $this->env->getExtension('vich_geographical')->renderMapWithEntities("location", $this->getContext($context, "location"));
            echo "
";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "location"), "longitude"), "html", null, true);
            echo "
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Map:infoWindow.html.twig";
    }

}
