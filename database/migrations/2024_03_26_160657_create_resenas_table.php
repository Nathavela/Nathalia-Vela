use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenasTable extends Migration
{
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('libro_id');
            $table->text('comentario');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    }

    public function down()
    {
        Schema::dropIfExists('resenas');
    }
}
