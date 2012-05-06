<?php

/* AcmeUserBundle:Default:product.html.twig */
class __TwigTemplate_2946b4ed248ca297f115194b7985c1fe extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t
\t";
        // line 4
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "category"));
        echo "
\t";
        // line 6
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "image"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "price"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "amount"));
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "min_amount"));
        echo "

    ";
        // line 11
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
