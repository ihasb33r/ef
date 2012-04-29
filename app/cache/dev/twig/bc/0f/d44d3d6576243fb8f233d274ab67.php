<?php

/* AcmeUserBundle:Default:sell.html.twig */
class __TwigTemplate_bc0fd44d3d6576243fb8f233d274ab67 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell_add"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"sell_add\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <div>
        <input type=\"submit\" value=\"Προσθήκη\" />
    </div>
</form>
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
