<?php

/* AcmeUserBundle:Default:sell.html.twig */
class __TwigTemplate_aac743b1088d6f34832a1ca864c76af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "
Εγγραφή νέου Αγρότη 
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"/images/backgroundarticle.png\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">
<h3> Προσθήκη Πώλησης </h3>
</div>
</div>
<div class=\"row article\">
    <div class=\"six columns offset-by-one form\">
        <form  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell_new"), "html", null, true);
        echo "\" method=\"post\"  class=\"nice\">

            ";
        // line 24
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "quantity"));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "min_quantity"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "price"));
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "origin"));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "agor"));
        echo "
            <input type=\"submit\" />
        </form>
    </div>
</div>
";
    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 

<div class=\"row\">
    <div class=\"twelve columns phone\">
        
        <p> test sidebar content </p>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
