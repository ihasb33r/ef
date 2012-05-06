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
        echo "<div class=\"fos_user_pazari\">


</div>";
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
