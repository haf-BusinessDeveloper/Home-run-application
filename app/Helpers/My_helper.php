<?php

function testAuth()
{
    
    $session = session();
    // $session->set('isLogin', true);
    $isLogin = $session->get('isLogin');
    if($isLogin){
        return true;
    }
    return false;
}


function DefaultContract()
{
    return "
    <h2>تعريف الأطراف:</h2>
    
    <h2>This agreement is entered into between [Company Name], hereinafter referred to as &quot;Contractor&quot;, and [Client Name], hereinafter referred to as &quot;Client&quot;.</h2>
    
    <h2>وصف الخدمات:</h2>
    
    <h2>The Contractor agrees to provide construction and finishing services for the renovation of [Property Description] located at [Property Address]. The scope of work includes but is not limited to: demolition, carpentry, electrical work, plumbing, painting, and finishing as per the agreed-upon specifications outlined in Appendix A.</h2>
    
    <h2>التكلفة والمدفوعات:</h2>
    
    <h2>The total cost of the project is [Total Amount], payable in installments as outlined in Appendix B. The Client agrees to make a down payment of [Down Payment Amount] upon signing this contract, with the remaining balance to be paid according to the agreed-upon payment schedule.</h2>
    
    <h2>جدولة المشروع:</h2>
    
    <h2>The Contractor agrees to complete the project within [Timeframe] from the commencement date, barring any unforeseen circumstances or delays beyond the Contractor&#39;s control.</h2>
    
    <h2>مواد البناء:</h2>
    
    <h2>All construction materials and finishes used in the project shall meet industry standards and specifications outlined in the project plans. Substitutions may be made with the Client&#39;s approval.</h2>
    
    <h2>تغييرات وتعديلات:</h2>
    
    <h2>Any changes or modifications to the scope of work must be agreed upon in writing by both parties and may result in additional costs and/or extensions to the project timeline.</h2>
    
    <h2>ضمان العمل:</h2>
    
    <h2>The Contractor warrants that all work performed under this agreement will be done in a professional and workmanlike manner and guarantees against defects in workmanship for a period of [Warranty Period] following the completion date.</h2>
    
    <h2>تسليم المفتاح:</h2>
    
    <h2>Upon completion of the project and receipt of final payment, the Contractor shall provide the Client with keys to the renovated property.</h2>
    
    <h2>تفسير العقد:</h2>
    
    <h2>This agreement constitutes the entire understanding between the parties and supersedes all prior agreements and understandings, whether written or oral, relating to the subject matter herein.</h2>
    
    <h2>قانون العقد:</h2>
    
    <h2>This agreement shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes arising under this agreement shall be resolved through arbitration in [Arbitration Location].</h2>";
}