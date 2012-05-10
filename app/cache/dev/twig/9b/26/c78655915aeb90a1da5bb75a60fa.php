<?php

/* AcmeUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_9b26c78655915aeb90a1da5bb75a60fa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr><h4>Αγορασμένα:</h4></tr>
<form  action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_new"), "html", null, true);
        echo "\" method=\"post\"  class=\"nice\">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "buy"));
        foreach ($context['_seq'] as $context["_key"] => $context["buy"]) {
            // line 4
            echo "<form  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_new"), "html", null, true);
            echo "\" method=\"post\"  class=\"nice\">
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 6
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
                foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                    // line 7
                    echo "\t\t\t
\t\t\t";
                    // line 8
                    if ((($this->getAttribute($this->getAttribute($this->getContext($context, "buy"), "user"), "id") == $this->getContext($context, "key")) && ($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id") == $this->getContext($context, "key")))) {
                        echo "\t
\t\t\t\t";
                        // line 9
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "location"));
                        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                            // line 10
                            echo "\t\t\t\t\t";
                            if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                                // line 11
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 12
                                    echo "\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                        // line 13
                                        echo "\t\t\t\t\t\t<h6>Έχετε αγοράσει το προϊόν: ";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                        echo "</h6>
\t\t\t\t\t\t\t";
                                    }
                                    // line 15
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 16
                                echo "\t\t\t\t\t";
                            }
                            // line 17
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 18
                        echo "\t\t\t    <h6>Σε ποσότητα:<input type=\"text\" name=\"quantity\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "buy"), "quantity"), "html", null, true);
                        echo "\" />κιλά</h6>
\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 22
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "\t<input type=\"submit\" />
\t\t\t</form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['buy'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "

<tr><h4>Προς πώληση:</h4></tr>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 30
            echo "<form  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_new_sell"), "html", null, true);
            echo "\" method=\"post\"  class=\"nice\">
\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 32
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id") == $this->getContext($context, "key"))) {
                    echo "\t
\t\t\t";
                    // line 33
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "location"));
                    foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                        // line 34
                        echo "\t\t\t\t";
                        if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id"))) {
                            // line 35
                            echo "\t\t\t\t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 36
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getContext($context, "product"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "id"))) {
                                    // line 37
                                    echo "\t\t\t\t\t\t\t<h6>Πουλάτε το προϊόν: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
                                    echo "</h6>
\t\t\t\t\t\t";
                                }
                                // line 39
                                echo "\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 40
                            echo "\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 42
                    echo "\t\t\t\t<tr><td><h6>Σε ποσότητα: </td><td><input type=\"text\" name=\"quantity\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
                    echo "\"/> κιλά</h6></td></tr>
\t\t\t<tr><td><h6>Με ελάχιστη ποσότητα αγοράς: </td><td><input type=\"text\" name=\"minquantity\" value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "minquantity"), "html", null, true);
                    echo "\"/> κιλά</h6></td></tr>
\t\t";
                }
                // line 45
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 46
            echo "\t<tr><td></td><td><input type=\"submit\" /></td>
\t</from>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
