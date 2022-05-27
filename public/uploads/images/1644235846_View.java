/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package projectjogl;

import com.jogamp.opengl.GL2;
import com.jogamp.opengl.GLAutoDrawable;
import com.jogamp.opengl.GLEventListener;
import com.jogamp.opengl.glu.GLU;
import com.jogamp.opengl.util.gl2.GLUT;

/**
 *
 * @author ibrah
 */
public class View implements GLEventListener{
    
    int winWidth, winHeight;

    public View(int winWidth, int winHeight) {
        this.winWidth = winWidth;
        this.winHeight = winHeight;
    }

    @Override
    public void init(GLAutoDrawable glad) {
        final GL2 gl = glad.getGL().getGL2();
        gl.glClearColor(0.2f, 0.2f, 0.2f, 0);
         
        GLU glu = new GLU(); 
        gl.glMatrixMode(GL2.GL_PROJECTION);
        gl.glLoadIdentity();
        glu.gluOrtho2D(-100, 100, -100, 100);
        gl.glMatrixMode(GL2.GL_MODELVIEW);
        
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void dispose(GLAutoDrawable glad) {

//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void display(GLAutoDrawable glad) {
        final GL2 gl = glad.getGL().getGL2();
        
        // dark green background
        gl.glLineWidth(3);
        gl.glColor4d(0, 0.298, 0.003, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(100, -50, 0);
        gl.glVertex3d(100, -100, 0);
        gl.glVertex3d(-100, -100, 0);
        gl.glVertex3d(-100, -50, 0);
        gl.glEnd();
        
        // light green background
        gl.glLineWidth(3);
        gl.glColor4d(0.6, 0.8, 0.2, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(100, 10, 0);
        gl.glVertex3d(100, -50, 0);
        gl.glVertex3d(-100, -50, 0);
        gl.glVertex3d(-100, 10, 0);
        gl.glEnd();
        
        // light blue background
        gl.glLineWidth(3);
        gl.glColor4d(0.003, 0.898, 0.901, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(100, 100, 0);
        gl.glVertex3d(100, 10, 0);
        gl.glVertex3d(-100, 10, 0);
        gl.glVertex3d(-100, 100, 0);
        gl.glEnd();
        
        // house
        gl.glLineWidth(3);
        gl.glColor4d(0.749, 0.474, 0.141, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(80, -5, 0);
        gl.glVertex3d(80, -80, 0);
        gl.glVertex3d(0, -80, 0);
        gl.glVertex3d(0, -5, 0);
        gl.glEnd();
        
        // roof
        gl.glLineWidth(3);
        gl.glColor4d(0.352, 0, 0, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(82, 25, 0);
        gl.glVertex3d(82, -5, 0);
        gl.glVertex3d(-2, -5, 0);
        gl.glVertex3d(-2, 25, 0);
        gl.glEnd();
        
        // door frame
        gl.glLineWidth(3);
        gl.glColor4d(1, 1, 1, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(50, -40, 0);
        gl.glVertex3d(50, -80, 0);
        gl.glVertex3d(30, -80, 0);
        gl.glVertex3d(30, -40, 0);
        gl.glEnd();
        
        // door
        gl.glLineWidth(3);
        gl.glColor4d(0.352, 0, 0, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(42, -47, 0);
        gl.glVertex3d(42, -73, 0);
        gl.glVertex3d(30, -80, 0);
        gl.glVertex3d(30, -40, 0);
        gl.glEnd();
        
        // window 1 frame
        gl.glLineWidth(3);
        gl.glColor4d(0.352, 0, 0, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(72, -17, 0);
        gl.glVertex3d(72, -45, 0);
        gl.glVertex3d(55, -45, 0);
        gl.glVertex3d(55, -17, 0);
        gl.glEnd();
        
        // window 1 block
        gl.glLineWidth(3);
        gl.glColor4d(1, 1, 1, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(71, -18.5, 0);
        gl.glVertex3d(71, -43.5, 0);
        gl.glVertex3d(56, -43.5, 0);
        gl.glVertex3d(56, -18.5, 0);
        gl.glEnd();
        
        // window 1 bars
        gl.glLineWidth(4);
        gl.glColor4d(0.352, 0, 0, 0);
        
        gl.glBegin(GL2.GL_LINES);
        gl.glVertex3d(66.5, -18.5, 0);
        gl.glVertex3d(66.5, -43.5, 0);
        gl.glEnd();
        
        gl.glBegin(GL2.GL_LINES);
        gl.glVertex3d(60.5, -18.5, 0);
        gl.glVertex3d(60.5, -43.5, 0);
        gl.glEnd();
        
        // window 2 frame
        gl.glLineWidth(3);
        gl.glColor4d(0.352, 0, 0, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(25, -17, 0);
        gl.glVertex3d(25, -45, 0);
        gl.glVertex3d(8, -45, 0);
        gl.glVertex3d(8, -17, 0);
        gl.glEnd();
        
        // window 2 block
        gl.glLineWidth(3);
        gl.glColor4d(1, 1, 1, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(24, -18.5, 0);
        gl.glVertex3d(24, -43.5, 0);
        gl.glVertex3d(9, -43.5, 0);
        gl.glVertex3d(9, -18.5, 0);
        gl.glEnd();
        
        // window 2 bars
        gl.glLineWidth(4);
        gl.glColor4d(0.352, 0, 0, 0);
        gl.glBegin(GL2.GL_LINES);
        gl.glVertex3d(19.5, -18.5, 0);
        gl.glVertex3d(19.5, -43.5, 0);
        gl.glEnd();
        
        gl.glBegin(GL2.GL_LINES);
        gl.glVertex3d(13.5, -18.5, 0);
        gl.glVertex3d(13.5, -43.5, 0);
        gl.glEnd();
        
        // tree 1 trunk
        gl.glLineWidth(3);
        gl.glColor4d(0.894, 0.196, 0.007, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(-75, -27, 0);
        gl.glVertex3d(-75, -67, 0);
        gl.glVertex3d(-82, -67, 0);
        gl.glVertex3d(-82, -27, 0);
        gl.glEnd();
        
        // tree 2 trunk
        gl.glLineWidth(3);
        gl.glColor4d(0.894, 0.196, 0.007, 0);
        gl.glBegin(GL2.GL_POLYGON);
        gl.glVertex3d(-47, -37, 0);
        gl.glVertex3d(-47, -50, 0);
        gl.glVertex3d(-50, -50, 0);
        gl.glVertex3d(-50, -37, 0);
        gl.glEnd();

        // sun
        gl.glColor4d(1, 0.898, 0, 0);
        drawCircle(glad, -78, 78, 10);
        
        // tree 1 leaves
        gl.glColor4d(0, 0.501, 0.003, 0); 
        
        drawCircle(glad, -74, -25, 6);
        drawCircle(glad, -83, -25, 6);
        
        drawCircle(glad, -67, -19, 10);
        drawCircle(glad, -90, -19, 10);
        
        drawCircle(glad, -74, -2, 14);
        drawCircle(glad, -83, -2, 14);
        
        drawCircle(glad, -78, 10, 10);
        
        drawCircle(glad, -78, -18, 4);
        
         // tree 2 leaves
        drawCircle(glad, -44, -32, 10);
        drawCircle(glad, -53, -32, 10);
        
        drawCircle(glad, -48, -20, 8);
                
        drawCircle(glad, -48, -12, 5);
        
        // cloud 1
        gl.glColor4d(1, 1, 1, 0); 
        
        drawCircle(glad, 12, 73, 4);
        drawCircle(glad, 34, 73, 4);
        
        drawCircle(glad, 18, 73, 7);
        drawCircle(glad, 28, 73, 7);
        
        drawCircle(glad, 23, 77, 5);
        drawCircle(glad, 23, 68, 5);
        
        // cloud 2
        drawCircle(glad, -30, 76, 4);
        drawCircle(glad, -10, 76, 4);
        
        drawCircle(glad, -22, 76, 7);
        drawCircle(glad, -18, 76, 7);
        
        // bird 1
        gl.glLineWidth(3);
        gl.glColor4d(0.709, 0.184, 0.898, 0);
        
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(0, 60, 0);
        gl.glVertex3d(0, 55, 0);
        gl.glVertex3d(-6, 60, 0);
        gl.glEnd();
        
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(2, 63, 0);
        gl.glVertex3d(0, 60, 0);
        gl.glVertex3d(0, 63, 0);
        gl.glEnd();
        
        // bird 2
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(-18, 71, 0);
        gl.glVertex3d(-18, 66, 0);
        gl.glVertex3d(-24, 71, 0);
        gl.glEnd();
        
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(-16, 74, 0);
        gl.glVertex3d(-18, 71, 0);
        gl.glVertex3d(-18, 74, 0);
        gl.glEnd();
        
        // bird 3
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(-28, 70, 0);
        gl.glVertex3d(-28, 65, 0);
        gl.glVertex3d(-34, 70, 0);
        gl.glEnd();
        
        gl.glBegin(GL2.GL_TRIANGLES);
        gl.glVertex3d(-26, 73, 0);
        gl.glVertex3d(-28, 70, 0);
        gl.glVertex3d(-28, 73, 0);
        gl.glEnd();

        //Text
        final GLUT glut = new GLUT();

        gl.glColor4d(1, 1, 0, 0);

        gl.glRasterPos3f(-90f, -90f, 0);
        glut.glutBitmapString(GLUT.BITMAP_HELVETICA_18, "Ibrahim O Kaware");

//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void reshape(GLAutoDrawable glad, int i, int i1, int i2, int i3) {
        winWidth = i2;
        winHeight = i3;

//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    void drawCircle(GLAutoDrawable drawable, int xCenter, int yCenter, int radius) {
        final GL2 gl = drawable.getGL().getGL2();
        
        double x, y, angle;
        double inc = 1.0 / radius;
    
        gl.glBegin(gl.GL_POLYGON);
        for(angle = 0; angle < 2*Math.PI; angle += inc) {
            x = radius * Math.cos(angle);
            y = radius * Math.sin(angle);
            
            gl.glVertex3d(xCenter + x, yCenter + y, 0);
            gl.glVertex3d(xCenter + x, yCenter - y, 0);
            gl.glVertex3d(xCenter - x, yCenter + y, 0);
            gl.glVertex3d(xCenter - x, yCenter - y, 0);
            
            gl.glVertex3d(xCenter + y, yCenter + x, 0);
            gl.glVertex3d(xCenter - y, yCenter + x, 0);
            gl.glVertex3d(xCenter + y, yCenter - x, 0);
            gl.glVertex3d(xCenter - y, yCenter - x, 0);
        }
        gl.glEnd();
    }
}
