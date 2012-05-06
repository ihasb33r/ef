<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_cf5403b15fd16b4b3ce01b82126227c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "id"), array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

}
