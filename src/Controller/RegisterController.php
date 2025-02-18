// src/Controller/RegisterController.php
namespace App\Controller;

use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
/**
* @Route("/register", name="app_register", methods={"GET", "POST"})
*/
public function register(Request $request, DocumentManager $documentManager): Response
{
$error = null;

if ($request->isMethod('POST')) {
$email = $request->request->get('email');
$password = password_hash($request->request->get('password'), PASSWORD_BCRYPT);

// Validar si el usuario ya existe
$existingUser = $documentManager->getRepository(User::class)->findOneBy(['email' => $email]);

if ($existingUser) {
$error = "El usuario ya está registrado.";
} else {
// Crear y guardar nuevo usuario
$user = new User();
$user->setEmail($email);
$user->setPassword($password);

$documentManager->persist($user);
$documentManager->flush();

// Redirigir a dashboard
return $this->redirectToRoute('app_dashboard');
}
}

return $this->render('register.html.twig', [
'error' => $error,
]);
}
}